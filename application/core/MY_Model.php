<?php
//require_once APPPATH."hooks/Db_log.php";
/**
 * @property CI_DB_query_builder $db 
 */
class MY_Model extends CI_Model {

    private $realFillter = true;

    /**
     * Cepat tapi fillter num rownya tidak sesuai data asli, hanya di fillter saja
     * @return [type] [description]
     */
    function fastUnrealFillter()
    {
        $this->realFillter = false;
        return $this;
    }	

	/**
     * API datatable serverside
     * @param  array $request [auto]
     * @return array          [description]
     */
    function getDataGrid($request, $callBack, $param = []) 
    {
        if (isset($request['length'])) 
        {
            $limit = $request['length'];
            $offset = $request['start'];
            $search = $request['search']['value'];
            $order = $request['order'];

            foreach ($order as $o) 
            {
                $columnOrder[] = array('dir' => $o['dir'], 'column' => $request['columns'][$o['column']]['data']);
            }
            
            // hitung jumlah semua data pada tabel
            if ($this->realFillter) 
            {
                $count = call_user_func_array(array($this, $callBack), $param)->num_rows();    
            }

            // untk pencarian data
            if ($search != null || true) 
            {

                foreach ($request['columns'] as $key => $column) 
                {
                    if ($column['searchable'] == 'true')
                    {

                        if (isset($column['name']) && $column['name'] != NULL)
                        {
                            $t = explode("|",$column['name']);
                            
                            foreach($t as $c)
                            {
                                $like[$c] = ($search == null)?$column['search']['value']:$search;
                            }
                        }
                        else
                        {
                            $like[$column['data']] = ($search == null)?$column['search']['value']:$search;
                        }
                    }
                }

                //Active record fillter
                $this->db->group_start();

                if ($search == null) 
                {
                    $this->db->like($like);
                }
                else
                {
                    $this->db->or_like($like);
                }
                
                $this->db->group_end();

            }
            else
            {
                // fungsi yang berisi script dinamis active record
                // call_user_func_array(array($this, $callBack));
            }

            // fungsi untuk mengurutkan berdasarkan filed yang diilih
            foreach ($columnOrder as $or) 
            {
                $this->db->order_by($or['column'], $or['dir']);
            }

            // limit untuk paginnation datatable
            if ($limit > 0)
                $this->db->limit($limit, $offset);

            // if ($where != null) 
            // {
            //     $this->db->where($where);
            // }
            $result = call_user_func_array(array($this, $callBack), $param);

            $countFilter = $count;$result->num_rows();

            if (!$this->realFillter) 
            {
                $count = $countFilter;
            }

            $data = $result->result();


            // $countFilter = $result->num_rows();
            // return $this->db->last_query();
            return array('draw' => intval($_GET['draw']),'recordsTotal' => $count, 'recordsFiltered' => $countFilter, 'data' => $data /*, 'query' => $this->db->last_query()*/);
        }
        else
        {
        	$data = call_user_func_array(array($this, $callBack), $param);

            return array('data' => $data->result());
        }
    }

}

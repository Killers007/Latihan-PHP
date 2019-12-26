var mainContent = new Vue({
    el: "#main-content",
    data: {
        content: '',
        progressLoad: false,
        failLoad: false
    }
});

window.sidebar = new Vue({
    el: '#menu-navigation',
    data:{
        isActive:[],
        seen:false,
        tutor:false
    },
    methods: {
        navigate: function (page,menuOrder) {
          
            this.isActive = [];
            this.isActive[menuOrder] = true;

            var url = '';
            if (!baseUrl) {
                url = window.location.href.split("#")[0];
                url = `${url}/${page}`;
            } else {
                url += 'main/' + page;
            }
            // mainContent.$data.progressLoad = true;
            // mainContent.$data.content = '';
            fetch(url,{method:'GET',credentials:'include'})
                .then(function (res) {
                    // mainContent.$data.progressLoad = false;
                    return res.text();
                })
                .then(function (html) {
                    mainContent.$data.content = html;
                }).catch(function (err) {
                    // mainContent.$data.progressLoad = false;
                    mainContent.$data.failLoad = true;
            }) 
        },
     
    },
    // created: function () {
    //     this.check_pos();
    //     this.check_status_tutorial();
    //     this.check_hidden_status();
    // }
});
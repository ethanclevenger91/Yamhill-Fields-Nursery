
/*Contact form live response*/
var contactUpdatedResponseApp =new Vue ({
    el: '.form',
    data: {
        userName: "",
        userSubject: ""        
    },
    computed : {
       writeResponse : function(){
           var response=this.userName+" ";
           return response;
       }
    }
            
});
/*End of section.*/
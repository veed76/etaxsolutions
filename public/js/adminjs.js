var adminCommon = {
    init: function(){
       this.common(); 
    },
    common: function(){
        if($('.select2').length)
          $(".select2").select2();
        
        $(document).on("click","a.delete",function(){
            var url = this.dataset.code;
            swal({
              title: "Are you sure?",
              text: "Your will not be able to recover this user!",
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Yes, delete it!",
              closeOnConfirm: false
            },
            function(){
                window.location.href = url;
            });
        });
    },
};
$(document).ready(function(){
    adminCommon.init();
});
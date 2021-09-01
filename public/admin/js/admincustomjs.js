var host ="http://127.0.0.1:8000";
$(document).ready(function(){

    //form admin new user  start
$("#userform").validate({
    rules: {
        first_name: {required: true},
        last_name: {required: true},
        email:{
            required: true,
            email: true,
            "remote":{
                url :host+"/action/checkuseremail",
                type:"post",
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    email:function(){
                        return $('#userform :input[name="email"]').val();
                    }
                },
            }
        },
        phone:{
           // phoneUS: true,
            required: true,
            minlength:10,
            maxlength:10,
            "remote":{
                url :host+"/action/checkuserphone",
                type:"post",
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    email:function(){
                        return $('#userform :input[name="phone"]').val();
                    }
                },
            }
        },
       
        password: {required: true, minlength:6, maxlength:50},
        confirm_password: {
            required: true,
            equalTo: "#password"
        },
        address:{required: true},
        image:{required:true},
    },
    messages: {
        first_name: "Please enter first name.",
        last_name: "Please enter last name.",
        email: {
            required: "Please enter your email address.",
            remote: jQuery.validator.format("{0} is already taken.")
        },
        password: { required: 'Please enter Password.',minlength:'Please enter minimum length of password limit 6 digit.'},
        confirm_password: {required:" Enter Confirm Password Same as Password"},
        address: "Please enter your address",
        image:"Please select your profile"
    },
    submitHandler: function(form,e) {
        e.preventDefault();
        csrf =$('meta[name="csrf-token"]').attr('content');
      var formData= new FormData(jQuery('#userform')[0]);
        formData.append('_token',csrf);
        jQuery.ajax({
        type: 'post',
        url: host+'/action/newuser',
   
   //  cache: false,
     data: $(form).serialize(),
     //processData: false,
     //contentType: false,
     beforeSend: function() {
        jQuery('#newusersubmit').text('saving ...');
         jQuery('#newusersubmit').attr('disabled','disabled');
     },
     success:function(response) {      
         var obj = JSON.parse(response);
         if(obj.status=='true'){
           //   jQuery('.showmst1').css('display','block').html(obj.message);
           jQuery('#newusersubmit').text('Register Succesfully!');

             setTimeout(function(){
                jQuery('#newusersubmit').text('Save');
                jQuery('#newusersubmit').removeAttr('disabled');
             //   jQuery('.showmst1').css('display','none').html('');                    
                  
                
               }, 2000);
           //      jQuery('#reset').trigger('click');
         }else{
           //   jQuery('#register').text('Save');
           //   jQuery('#register').removeAttr('disabled');
           //   jQuery('.showmst1').css('display','block').html(obj.message);
           //   setTimeout(function(){
           //      jQuery('.showmst1').css('display','none').html('');
           //     }, 3000);
         }
     }
        });

     }
});
/*
    jQuery("#userform").each(function(e, a) {
        
        jQuery(this).validate({
             rules: {
                first_name: {required: true},
                last_name: {required: true},
                email:{
                    required: true,
                    email: true,
                    "remote":{
                        url :host+"/action/checkuseremail",
                        type:"post",
                        data: {
                            "_token": $('meta[name="csrf-token"]').attr('content'),
                            email:function(){
                                return $('#userform :input[name="email"]').val();
                            }
                        },
                    }
                },
                phone:{
                    phoneUS: true,
                    required: true,
                    minlength:10,
                    maxlength:10,
                },
               
                password: {required: true, minlength:6, maxlength:50},
                confirm_password: {
                    equalTo: "#password"
                },
                address:{required: true},
                image:{required:true},
            },
             messages: {
                first_name: "Please enter first name.",
                last_name: "Please enter last name.",
                email: {
                    required: "Please enter your email address.",
                    remote: jQuery.validator.format("{0} is already taken.")
                },
                password: {required: 'Please enter Password.',minlength:'Please enter minimum length of password limit 6 digit.'},
                confirm_password: " Enter Confirm Password Same as Password",
                address: "Please enter your address",
                image:"Please select your profile"

            },
       
             submitHandler: function(form) {
                 csrf =$('meta[name="csrf-token"]').attr('content');
               var formData= new FormData(jQuery('#userform')[0]);
                 formData.append('_token',csrf);
                 jQuery.ajax({
              type: 'post',
              url: host+'/action/newuser',
              cache: false,
              data: formData,
              processData: false,
              contentType: false,
              beforeSend: function() {
                 jQuery('#newusersubmit').text('saving ...');
                  jQuery('#newusersubmit').attr('disabled','disabled');
              },
              success:function(response) {      
                  var obj = JSON.parse(response);
                  if(obj.status=='true'){
                    //   jQuery('.showmst1').css('display','block').html(obj.message);
                    jQuery('#newusersubmit').text('Register Succesfully!');
  
                      setTimeout(function(){
                         jQuery('#newusersubmit').text('Save');
                         jQuery('#newusersubmit').removeAttr('disabled');
                         jQuery('.showmst1').css('display','none').html('');                    
                           
                         
                        }, 2000);
                    //      jQuery('#reset').trigger('click');
                  }else{
                    //   jQuery('#register').text('Save');
                    //   jQuery('#register').removeAttr('disabled');
                    //   jQuery('.showmst1').css('display','block').html(obj.message);
                    //   setTimeout(function(){
                    //      jQuery('.showmst1').css('display','none').html('');
                    //     }, 3000);
                  }
              }
                 });
     
              }
         });  
     });
*/

 // user form  validation end
 });
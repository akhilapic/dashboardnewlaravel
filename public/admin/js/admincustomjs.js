var host ="http://127.0.0.1:8000";
$(document).ready(function(){
    $(".showmst2").fadeOut();
//for add new user
    $('form[id="second_form"]').validate({
        rules: {
          first_name: 'required',
          last_name: 'required',
          email:{
                required: true,
                email: true,
                // "remote":{
                // url :host+"/action/checkuseremail",
                //         type:"post",
                //         data: {
                //             "_token": $('meta[name="csrf-token"]').attr('content'),
                //             email:function(){
                //                 return $('#userform :input[name="email"]').val();
                //             }
                //         },
                //     }
                    },
          password: {
            required: true,
            minlength: 8,
          },
          phone:{
                       // phoneUS: true,
                        required: true,
                        minlength:10,
                        maxlength:10,
                        // "remote":{
                        //     url :host+"/action/checkuserphone",
                        //     type:"post",
                        //     data: {
                        //         "_token": $('meta[name="csrf-token"]').attr('content'),
                        //         email:function(){
                        //             return $('#userform :input[name="phone"]').val();
                        //         }
                        //     },
                        // }
                    },
                   
                    password: {required: true, minlength:6, maxlength:50},
                    confirm_password: {
                        required: true,
                        equalTo: "#password"
                    },
          
        },
        image:{required:true},
        messages: {
            first_name: "Please enter first name.",
            last_name: "Please enter last name.",
            email: {
                required: "Please enter your email address.",
                remote: $.validator.format("{0} is already taken.")
            },
            password: { required: 'Please enter Password.',minlength:'Please enter minimum length of password limit 6 digit.'},
            confirm_password: {required:" Enter Confirm Password Same as Password"},
            image:"Please select your profile"
        },
        submitHandler: function(form) {
             csrf =$('meta[name="csrf-token"]').attr('content');
           var formData= new FormData($('#second_form')[0]);
             formData.append('_token',csrf);
             $.ajax({
          type: 'post',
          url: host+'/action/newuser',
          cache: false,
          data: formData,
          processData: false,
          contentType: false,
          beforeSend: function() {
             $('#newusersubmit').text('saving ...');
             // $('#newusersubmit').attr('disabled','disabled');
          },
          success:function(response) {      
              var obj = JSON.parse(response);
              if(obj.status=='true'){
                $(".showmst2").fadeIn();
                   $('.showmst2').css('display','block').html(obj.message);
                $('#newusersubmit').text('Register Succesfully!');

                  setTimeout(function(){
                     $('#newusersubmit').text('Save');
                     $('#newusersubmit').removeAttr('disabled');
                     $(".showmst2").fadeOut();
                     //$('.showmst1').css('display','none').html('');                    
                       
                     
                    }, 2000);
                //      $('#reset').trigger('click');
              }else{
                  $('#newusersubmit').text('Save');
                  $('#newusersubmit').removeAttr('disabled');
                  $(".showmst2").fadeIn();
                  $('.showmst2').css('display','block').html(obj.message);
                  setTimeout(function(){
                     $('.showmst2').css('display','none').html('');
                    }, 3000);
              }
          }
             });
 
          }
      });
//for add new user end

//for add edit user
$('form[id="edit_user_form"]').validate({
  rules: {
    first_name: 'required',
    last_name: 'required',
    email:{
          required: true,
          email: true,
          // "remote":{
          // url :host+"/action/checkuseremail",
          //         type:"post",
          //         data: {
          //             "_token": $('meta[name="csrf-token"]').attr('content'),
          //             email:function(){
          //                 return $('#userform :input[name="email"]').val();
          //             }
          //         },
          //     }
              },
    password: {
      required: true,
      minlength: 8,
    },
    phone:{
                 // phoneUS: true,
                  required: true,
                  minlength:10,
                  maxlength:10,
                  // "remote":{
                  //     url :host+"/action/checkuserphone",
                  //     type:"post",
                  //     data: {
                  //         "_token": $('meta[name="csrf-token"]').attr('content'),
                  //         email:function(){
                  //             return $('#userform :input[name="phone"]').val();
                  //         }
                  //     },
                  // }
              },
            
    
  },
  messages: {
      first_name: "Please enter first name.",
      last_name: "Please enter last name.",
      email: {
          required: "Please enter your email address.",
          remote: $.validator.format("{0} is already taken.")
      },
  },
  submitHandler: function(form) {
       csrf =$('meta[name="csrf-token"]').attr('content');
     var formData= new FormData($('#edit_user_form')[0]);
       formData.append('_token',csrf);
       $.ajax({
    type: 'post',
    url: host+'/action/edituser',
    cache: false,
    data: formData,
    processData: false,
    contentType: false,
    beforeSend: function() {
       $('#newusersubmit').text('saving ...');
       // $('#newusersubmit').attr('disabled','disabled');
    },
    success:function(response) {      
        var obj = JSON.parse(response);
        if(obj.status=='true'){
          $(".showmst2").fadeIn();
             $('.showmst2').css('display','block').html(obj.message);
          $('#newusersubmit').text('Register Succesfully!');

            setTimeout(function(){
               $('#newusersubmit').text('Save');
               $('#newusersubmit').removeAttr('disabled');
               $(".showmst2").fadeOut();
               //$('.showmst1').css('display','none').html('');                    
                 
               
              }, 2000);
          //      $('#reset').trigger('click');
        }else{
            $('#newusersubmit').text('Save');
            $('#newusersubmit').removeAttr('disabled');
            $(".showmst2").fadeIn();
            $('.showmst2').css('display','block').html(obj.message);
            setTimeout(function(){
               $('.showmst2').css('display','none').html('');
              }, 3000);
        }
    }
       });

    }
});
//for add edit user end

// deleted user 
$(".deleted").click(function(){
c=   confirm("Are You Sure You Wamt To Delete This Record");
if(c== true)
{
  image =$(this).data("image");
  id = $(this).data("id");
  token = $(this).data("token");

       $.ajax({
    type: 'post',
    url: host+'/action/deleteuser',
  //  cache: false,
    data: { 
      id: $(this).data('id'),
      image: $(this).data('image'),
      _token: $(this).data('token')
    },
    //processData: false,
    //contentType: false,
    
    success: function(data) {
      var obj = JSON.parse(data);
      if(obj.status==true){
        jQuery('#row_'+obj.id).remove();
      }else{
        alert(obj.message);
      }
    }
       });
}
  
});

$(".userstatus").click(function(){
  id = $(this).data("id");
  status = $(this).data("status");
  csrf =$('meta[name="csrf-token"]').attr('content');

  $.ajax({
    type: 'post',
    url: host+'/action/userestatus',
  //  cache: false,
    data: { 
      id: $(this).data('id'),
      status: $(this).data('status'),
      _token: csrf
    },
    //processData: false,
    //contentType: false,
    
    success: function(data) {
      var obj = JSON.parse(data);
      if(obj.status==true){
        window.location.href=obj.url;
      }
    }
       });
});// close status

//for add login
$('form[id="login"]').validate({
  rules: {
    email:{
          required: true,
          email: true,
              },
    password: {
      required: true,
      minlength: 3,
    },
  },
  messages: {
      email: {
          required: "Please enter your email address.",
        //  remote: $.validator.format("{0} is already taken.")
      },
  },
  submitHandler: function(form) {
       csrf =$('meta[name="csrf-token"]').attr('content');
     var formData= new FormData($('#login')[0]);
       formData.append('_token',csrf);
       $.ajax({
    type: 'post',
    url: host+'/action/login',
    cache: false,
    data: formData,
    processData: false,
    contentType: false,
    beforeSend: function() {
       $('#signin').text('checking ...');
       // $('#newusersubmit').attr('disabled','disabled');
    },
    success:function(data) {       
      var obj = JSON.parse(data);
      if(obj.status==true){
        jQuery('#msz').html(obj.message);
        jQuery('#signin').text('Sign In');
        setTimeout(function(){
           window.location = '/'+host+"/admin/dashboard";
        }, 2000);
      }else{
        jQuery('#signin').text('Sign In');
      }
    }
       });

    }
});
//for admin login user end

// $("#newusersubmit").click(function(event){
//     event.preventDefault();
//     alert("submit");
// });
    //form admin new user  start
// $("#userform").validate({
//     rules: {
//         first_name: {required: true},
//         last_name: {required: true},
//         email:{
//             required: true,
//             email: true,
//             "remote":{
//                 url :host+"/action/checkuseremail",
//                 type:"post",
//                 data: {
//                     "_token": $('meta[name="csrf-token"]').attr('content'),
//                     email:function(){
//                         return $('#userform :input[name="email"]').val();
//                     }
//                 },
//             }
//         },
//         phone:{
//            // phoneUS: true,
//             required: true,
//             minlength:10,
//             maxlength:10,
//             "remote":{
//                 url :host+"/action/checkuserphone",
//                 type:"post",
//                 data: {
//                     "_token": $('meta[name="csrf-token"]').attr('content'),
//                     email:function(){
//                         return $('#userform :input[name="phone"]').val();
//                     }
//                 },
//             }
//         },
       
//         password: {required: true, minlength:6, maxlength:50},
//         confirm_password: {
//             required: true,
//             equalTo: "#password"
//         },
//         address:{required: true},
//         image:{required:true},
//     },
//     messages: {
//         first_name: "Please enter first name.",
//         last_name: "Please enter last name.",
//         email: {
//             required: "Please enter your email address.",
//             remote: $.validator.format("{0} is already taken.")
//         },
//         password: { required: 'Please enter Password.',minlength:'Please enter minimum length of password limit 6 digit.'},
//         confirm_password: {required:" Enter Confirm Password Same as Password"},
//         address: "Please enter your address",
//         image:"Please select your profile"
//     },
//     submitHandler: function(form,e) {
//         e.preventDefault();
//         csrf =$('meta[name="csrf-token"]').attr('content');
//       var formData= new FormData($('#userform')[0]);
//         formData.append('_token',csrf);
//         $.ajax({
//         type: 'post',
//         url: host+'/action/newuser',
   
//    //  cache: false,
//      data: $(form).serialize(),
//      //processData: false,
//      //contentType: false,
//      beforeSend: function() {
//         $('#newusersubmit').text('saving ...');
//          $('#newusersubmit').attr('disabled','disabled');
//      },
//      success:function(response) {      
//          var obj = JSON.parse(response);
//          if(obj.status=='true'){
//            //   $('.showmst1').css('display','block').html(obj.message);
//            $('#newusersubmit').text('Register Succesfully!');

//              setTimeout(function(){
//                 $('#newusersubmit').text('Save');
//                 $('#newusersubmit').removeAttr('disabled');
//              //   $('.showmst1').css('display','none').html('');                    
                  
                
//                }, 2000);
//            //      $('#reset').trigger('click');
//          }else{
//            //   $('#register').text('Save');
//            //   $('#register').removeAttr('disabled');
//            //   $('.showmst1').css('display','block').html(obj.message);
//            //   setTimeout(function(){
//            //      $('.showmst1').css('display','none').html('');
//            //     }, 3000);
//          }
//      }
//         });

//      }
// });

    $("#userform").each(function(e, a) {
      alert("user form submit");
        $(this).validate({
             rules: {
                first_name: {required: true},
                last_name: {required: true},
                email:{
                    required: true,
                    email: true,
                    // "remote":{
                    //     url :host+"/action/checkuseremail",
                    //     type:"post",
                    //     data: {
                    //         "_token": $('meta[name="csrf-token"]').attr('content'),
                    //         email:function(){
                    //             return $('#userform :input[name="email"]').val();
                    //         }
                    //     },
                    // }
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
             //   address:{required: true},
                image:{required:true},
            },
             messages: {
                first_name: "Please enter first name.",
                last_name: "Please enter last name.",
                email: {
                    required: "Please enter your email address.",
                    remote: $.validator.format("{0} is already taken.")
                },
                password: {required: 'Please enter Password.',minlength:'Please enter minimum length of password limit 6 digit.'},
                confirm_password: " Enter Confirm Password Same as Password",
                address: "Please enter your address",
                image:"Please select your profile"

            },
       
             submitHandler: function(form) {
                alert("submit button call");
                 csrf =$('meta[name="csrf-token"]').attr('content');
               var formData= new FormData($('#userform')[0]);
                 formData.append('_token',csrf);
                 $.ajax({
              type: 'post',
              url: host+'/action/newuser',
              cache: false,
              data: formData,
              processData: false,
              contentType: false,
              beforeSend: function() {
                 $('#newusersubmit').text('saving ...');
                  $('#newusersubmit').attr('disabled','disabled');
              },
              success:function(response) {      
                  var obj = JSON.parse(response);
                  if(obj.status=='true'){
                    //   $('.showmst1').css('display','block').html(obj.message);
                    $('#newusersubmit').text('Register Succesfully!');
  
                      setTimeout(function(){
                         $('#newusersubmit').text('Save');
                         $('#newusersubmit').removeAttr('disabled');
                         $('.showmst1').css('display','none').html('');                    
                           
                         
                        }, 2000);
                    //      $('#reset').trigger('click');
                  }else{
                    //   $('#register').text('Save');
                    //   $('#register').removeAttr('disabled');
                    //   $('.showmst1').css('display','block').html(obj.message);
                    //   setTimeout(function(){
                    //      $('.showmst1').css('display','none').html('');
                    //     }, 3000);
                  }
              }
                 });
     
              }
         });  
     });


 // user form  validation end
 });
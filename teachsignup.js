function validation_for_signup()
{

                var check_email = /^[\w\.]+@bmsce.ac.in$/;
                var check_name = /^[a-zA-Z0-9_]{3,16}$/;
                var check_name = /^[a-zA-Z]{3,16}$/;
                var check_phone = /^[0-9]{10,12}$/;

                                                if(document.signup.firstname.value=="")
                                                {
                                                                alert("Please enter First Name");
                                                                document.signup.firstname.focus();
                                                                return false;
                                                }
                                                else if(check_name.test(document.signup.firstname.value) == false)
                                                {
                                                              document.getElementById("errorfn").style.display = "inline";
                                                                document.signup.firstname.focus();
                                                                return false;
                                                }
                                            
                                if(document.signup.username.value=="")
                                {
                                                alert("Please enter Username");
                                                document.signup.username.focus();
                                                return false;
                                }
                                else if(check_username.test(document.signup.username.value) == false)
                                {
                                                document.getElementById("errorun").style.display = "inline";
                                                document.signup.username.focus();
                                                return false;
                                }
                                if(document.signup.email.value=="")
                                {
                                                alert("Please enter Email");
                                                document.signup.email.focus();
                                                return false;
                                }
                                else if(check_email.test(document.signup.email.value) == false)
                                {
                                                document.getElementById("errore").style.display = "inline";
                                                document.signup.email.focus();
                                                return false;
                                }
                                if(document.signup.password.value=='')
                                {
                                                alert("Please enter Password");
                                                document.signup.password.focus();
                                                return false;
                                }
                                else if(document.signup.password.value.length<6)
                                {
                                                alert("Password is too short");
                                                document.signup.password.focus();
                                                return false;
                                }
                                if(document.signup.passconf.value=='')
                                {
                                                alert("Please confirm Password");
                                                document.signup.passconf.focus();
                                                return false;
                                }
                                else if(document.signup.password.value!=document.signup.passconf.value)
                                {
                                                alert("Password does not match");
                                                document.signup.password.focus();
                                                return false;
                                }

}

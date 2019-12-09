function validateuname()
{
  var regx=/^([a-zA-Z0-9-]+)@([a-z]).([a-z]).([a-z])$/;
  if(regx.test(document.form1.uname.value)==false||document.form1.uname.value=='')
    {
    alert("please enter valid username");
    document.form1.uname.focus();
    return false;
    }
    if(document.signup.password.value=='')
    {
                    alert("Please enter Password.");
                    document.signup.password.focus();
                    return false;
    }

}

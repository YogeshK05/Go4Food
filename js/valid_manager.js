function formValidation()
{
    var name = document.getElementById("fullname");
    var pno = document.getElementById("contact");
    if(namevalidation(name))
    {
        if(phonevalidation(pno,10))
        {

        }
    }
    return false;
   }

function namevalidation(name)
{
    var letters = /^[A-Za-z]+$/;
    if(name.value.match(letters))
    {
        return true;
    }
    else
    {
        alert("Name must be alphabet characters only");
        name.focus();
        return false;
    }
}

function phonevalidation(pno)
{
    var numbers = /^[0-9]+$/;
    if(pno.value=="")
    {
        alert("Phone number is required.");
        pno.focus();
        return false;
    }
    if(isNaN(pno.value))
    {
        alert("Invalid Phone number");
        pno.focus();
        return false;
    }
    if((pno.value).length < 10)
    {
        alert("Phone number should be minimum of 10 digits");
        pno.focus();
        return false;
    }
    return true;
}

function formValidation()
{
    var uid = document.registration.number;
    var passid = document.registration.passid;
    var uname1 = document.registration.name1;
    var uname2 = document.registration.name2;
    var uadd1 = document.registration.address1;
    var uadd2 = document.registration.address2;
    var uzip = document.registration.zip;
    var uemail = document.registration.email;
    var pnumber = document.registration.urladd;

    if(validateNumber(uid))
    {
        if(validatePassword(passid,7,12))
        {
            if(allLetter(uname1))
            {
                if(allLetter(uname2))
            {
                if(alphanumeric(uadd1))
                {
                    if(alphanumeric(uadd2))
                {
                        if(allnumeric(uzip))
                        {
                            if(checkEmail(uemail))
                            {
                                if(checkphonenumber(pnumber))
                                {

                                }
                            }
                        }

                }
                }
            }
            }
        }
    }
    return false;
}
function validateNumber(fld) {
    var error = "";
    var illegalChars = /\W/;

    if (fld.value == "") {
        error = "You didn't enter a number.\n";
        alert(error);
        return false;

    } else if ((fld.value.length < 1) || (fld.value.length > 5) || (isNaN(fld.value))) {
        error = "The number is the wrong length.\n";
        alert(error);
        return false;

    } else if (illegalChars.test(fld.value)) {
        error = "The number contains illegal characters.\n";
        alert(error);
        return false;

    } else {
        fld.style.background = 'White';
    }
    return true;
}

function validatePassword(fld) {
    var error = "";
    var illegalChars = /[\W_]/; // allow only letters and numbers

    if (fld.value == "") {
        error = "You didn't enter a password.\n";
        alert(error);
        return false;

    }  else if (illegalChars.test(fld.value)) {
        error = "The password contains illegal characters.\n";
        alert(error);
        return false;

    } else if ( (fld.value.search(/[a-zA-Z]+/)==-1) || (fld.value.search(/[0-9]+/)==-1) ) {
        error = "The password must contain at least one numeral.\n";
        alert(error);
        return false;

    } else {
        fld.style.background = 'White';
    }
    return true;
}

function allLetter(uname1)
{
    var letters = /^[A-Za-z]+$/;
    if(uname1.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('name must have alphabet characters only');
        return false;
    }
}

function allLetter(uname2)
{
    var letters = /^[A-Za-z]+$/;
    if(uname2.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('name must have alphabet characters only');
        return false;
    }
}

function alphanumeric(uadd1)
{
    var letters = /^[0-9a-zA-Z]+$/;
    if(uadd1.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('User address must have alphanumeric characters only');
        uadd1.focus();
        return false;
    }
}

function alphanumeric(uadd2)
{
    var letters = /^[0-9a-zA-Z]+$/;
    if(uadd2.value.match(letters) || (uadd2.value==""))
    {
        return true;
    }
    else
    {
        alert('User address must have alphanumeric characters only');
        uadd2.focus();
        return false;
    }
}

function allnumeric(uzip)
{
    var numbers = /^[0-9]+$/;
    if(uzip.value.match(numbers))
    {
        return true;
    }
    else
    {
        alert('ZIP code must have numeric characters only');
        return false;
    }
}

function checkEmail(mail) {
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(mail.value.match(filter))
    {
        return true;
    }
    else{
        alert('Please enter valid email address');
        return false;
    }
}

function checkphonenumber(pn) {
    var fil = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if(pn.value.match(fil) || (pn.value==""))
    {
        return true;
    }
    else{
        alert('Please enter valid number');
        return false;
    }
}


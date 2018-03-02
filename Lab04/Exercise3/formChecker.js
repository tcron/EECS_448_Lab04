function validate()
{
    let pass = document.getElementById("password");
    let email = document.getElementById("email");
    let baseballQuantity = document.getElementById("baseballQuantity");
    let footballQuantity  = document.getElementById("footballQuantity");
    let basketballQuantity = document.getElementById("basketballQuantity");

    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) {
        alert("Please enter a valid email address")
    }
    else if(pass.value == "")
    {
        alert("Please enter a password");
    }
    else
    {
        document.getElementById("myForm").submit();
    }
}

function reset()
{
    document.getElementById("password").value = "";
    document.getElementById("email").value = "";

    document.getElementById("baseballQuantity").value = 0;
    document.getElementById("footballQuantity").value = 0;
    document.getElementById("basketballQuantity").value = 0;

    document.getElementById("7Day").checked = "checked";

}
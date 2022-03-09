function calculate()
{
    //Variables
    var totalCost, tax;
    totalCost = 0;

    //Membership buttons
    if(document.getElementById("membership1").checked)
    {
        totalCost = totalCost + 80;
    }

    if(document.getElementById("membership2").checked)
    {
        totalCost = totalCost + 100;
    }

    if(document.getElementById("membership3").checked)
    {
        totalCost = totalCost + 120;
    }

    //Additional Charges
    if(document.getElementById("tennis").checked == true)
    {
        totalCost = totalCost + 15;
    }

    if(document.getElementById("racquetball").checked == true)
    {
        totalCost = totalCost + 20;
    }

    if(document.getElementById("golf").checked == true)
    {
        totalCost = totalCost + 25;
    }

    //Additonal Charges 2
    //Variables
    var additional = document.forms["form1"].additional;
    var newCharges;
    newCharges = 0;
    var i;

    for(i = 0; i < additional.length; i++)
    {
        if(additional[i].checked)
        {
            newCharges = newCharges + parseInt(additional[i].value);
        }
    }

    //Adds new charges to total cost
    totalCost = totalCost + newCharges;

    //Calculations
    tax = parseFloat(document.getElementById("tax").value);
    
    //Adds tax to total cost
    totalCost = totalCost + (totalCost * tax);
    totalCost = "$" + totalCost .toFixed(2);

    //Displays total cost in total text box
    document.getElementById("total").value = totalCost;

}

function clearValues()
{
    document.getElementById("tax").value = 0;
    document.getElementById("total").value = " ";
    
    /*
    let inputs1 = document.getElementById("membership1");
    inputs1.checked = false;

    let inputs2 = document.getElementById("membership2");
    inputs2.checked = false;

    let inputs3 = document.getElementById("membership3");
    inputs3.checked = false;

    let inputs4 = document.getElementById("tennis");
    inputs4.checked = false;

    let inputs5 = document.getElementById("racquetball");
    inputs5.checked = false;

    let inputs6 = document.getElementById("golf");
    inputs6.checked = false;

    var additional = document.forms["form1"].additional;
    var i;
    for(i = 0; i < 3; i++)
    {
        if(additional[i].checked)
        {
            let inputs7 = document.getElementById("additional");
            inputs7.checked = false;
        }
    }
    */
}
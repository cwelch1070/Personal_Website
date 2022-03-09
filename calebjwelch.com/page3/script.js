function calculate()
{
    var exam1, exam2, exam3, exam4, average;

    exam1 = parseFloat(document.getElementById("exam1").value);
    exam2 = parseFloat(document.getElementById("exam2").value);
    exam3 = parseFloat(document.getElementById("exam3").value);
    exam4 = parseFloat(document.getElementById("exam4").value);

    average = (exam1 + exam2 + exam3 + exam4)/4;

    document.getElementById("average").value = average;

    if(average >= 70)
    {
        document.getElementById("status").value = "Passing";
    }
    else
    {
        document.getElementById("status").value = "Failing";
    }

    if(average >= 90)
    {
        document.getElementById("grade").value = "A";
        
    }
    
    if(average >= 80)
    {
        document.getElementById("grade").value = "B";
    }
    else
        if(average >= 70)
        {
            document.getElementById("grade").value = "C";
        }
        else
            if(average >= 60)
            {
                document.getElementById("grade").value = "D";
            }
            else
                document.getElementById("grade").value = "F";

}
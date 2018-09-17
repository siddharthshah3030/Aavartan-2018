
function mihirsir(xyz){
        //ajax call to update the task of id activenote
        console.log(xyz);
        $.ajax({
            url: "update.php",
            type: "POST",
            data: {eventno: xyz},
            success: function (data){
                console.log("success");
            },
            error: function(){
                console.log("error");
                $('#alertContent').text("There was an error with the Ajax Call. Please try again later.");
                        $("#alert").fadeIn();
            }

        });
        
    }
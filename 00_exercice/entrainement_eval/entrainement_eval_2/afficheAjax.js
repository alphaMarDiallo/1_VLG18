$(document).ready(function(){
    console.log('ready');

    $("button").click(function(e){
        e.preventDefault();
        console.log('click');
     
        $.ajax({
            type:"POST",
            url: "afficheAjax.php",
            success: function(result) {
                $("div").html(result);
            }
        });

    }); // FIN $('#button').on('click', function()

}); // FIN $(document).ready(function(){
$(function(){
    openLogin();
    closeLogin();
})

function closeLogin(){
        $('#login').hide();
        // $('#closeHeader').hide()
    $('.fa-times').click(function(){
        $('#login').hide();
    })
}

function openLogin(){
    
    $('#openLogin').click(function(e){
            e.preventDefault()
        $('#login').show();
    })
}
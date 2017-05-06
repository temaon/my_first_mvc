/**
 * Created by tema_on on 06.05.17.
 */

$(document).ready(function(){
    // console.log()
    // $('[id="sidebar"]').hide()
    // $('#menu a').click(function(e) {
    //     e.preventDefault();
    //     alert('Hello world!');
    // });
    $('h1').hide().slideDown('slow');
    $('div.box p a').click(function(e){
        e.preventDefault();
        // console.log('tutu')
        $.get('/portfolio').done(function(data){
            $('#ajax_content').append($(data).find('table'));
            $('#ajax_content').parent().show();
        });
    });

});

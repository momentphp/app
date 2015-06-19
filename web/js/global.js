$(document).ready(function(){

    $(document).on('click', 'a', function(event){
        var a = new RegExp('/' + window.location.host + '/');
        if (!a.test(this.href)) {
            event.preventDefault();
            event.stopPropagation();
            window.open(this.href, '_blank');
        }
    });

    $('.particleground').particleground({
        parallax: false,
        particleRadius: 5,
        lineColor: '#eeeeee',
        dotColor: '#e5e5e5',
        density: 10000
    });

});

$(document).ready(function(){

    //Progressbar

    let containerA = document.getElementById("circleA");

    let circleA = new ProgressBar.Circle(containerA, {
        color: '#64daf9',
        strokeWidth: 8,
        duration: 2000,
        from: { color: '#aaa'},
        to: { color: '#65daf9'},

        step: function(state, circle){
            circle.path.setAttribute('stroke', state.color);

            let value = Math.round(circle.value() * 60);

            circle.setText(value);
        }
    });

    circleA.animate(1.0);
    console.log("ola, mundo");

});

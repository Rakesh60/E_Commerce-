// ##### Counter Design #####
document.addEventListener("DOMContentLoaded",() =>{
    function counter(id,start,end,duration){
        let obj = document.getElementById(id),
        current = start,
        range = end - start,
        increment = end > start ? 1 : -1,
        step = Math.abs(Math.floor(duration / range)),
        timer = setInterval(() =>{
            current += increment;
            obj.textContent = current;
            if(current == end){
                clearInterval(timer);
            }
        }, step);
    }
    counter("count1",0,999,3000);
    counter("count2",0,999,3000);
    counter("count3",0,999,3000);
    counter("count4",0,999,3000);
});

// ##### Srcoll Back To Top #####
function srcollTopBack(){
    let srcollTopButton = document.querySelector("#scrollup");
    window.onscroll = function (){
        var scroll = document.documentElement.scrollTop;
        if(scroll >= 250){
            srcollTopButton.classList.add('scrollActive');
        }
        else{
            srcollTopButton.classList.remove('scrollActive');
        }
    }
}


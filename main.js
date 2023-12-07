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
    counter("count1",100,700,3000);
    counter("count2",0,250,3000);
    counter("count3",100,450,3000);
    counter("count4",0,120,3000);
})

// ##### Scroll To Top JS #####


let customers = document.querySelector('.enjoy-customers');
let mix = document.querySelector('.mix');
let time = document.querySelector('.time');
let countTime = 0;
let countCustomers = 0;
let countMix = 0;


const stop = setInterval(()=>{
    if(window.pageYOffset >= 4800){
        check();
    }
}, 1000)

function check(){
        clearInterval(stop);
        let timer = setInterval(()=>{
        countTime += 10;
        countMix += 12;
        countCustomers ++;
        customers.textContent = countCustomers;
        mix.textContent = countMix;
        time.textContent = countTime;
        if(countMix === 12000 || countTime === 10000 || countCustomers === 1000){
            clearInterval(timer);
        }
        }, 3);
}


const swap = document.querySelector('.swap');
let arr = ["Develop.", "Design.", "Explore.", "Capture."];
for (let i = 0; i < arr.length; i++) {
    swap.textContent = arr[i];
    setInterval(()=>{
        if(i>3){
            i=0;
        }
        swap.textContent = arr[i];
        i++;
    }, 3000);
    
}
$(function() {

    // 1. Une requète AJAX SIMPLE
    $.getJSON('https://jsonplaceholder.typicode.com/posts',function(data){
        // console.log(data);
        
        for(let i = 0; i < 10; i++){
            console.log(data[i]);
            // if(data[j] <= 10 ){
                $(`              
                <section>
                <header>
                ${data[i].title}
                </header>
                <article>
                ${data[i].body}
                </article>
                </section>             
                `).appendTo($('main'));
               
                
            // }
        }
    });



});
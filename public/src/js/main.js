    try {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'src/php/openWeatherMapApi.php', true);
    
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if (xhr.status == 200) {
                    console.log('src/php/openWeatherMapApi.php')
                }
    
            }
        }
        
    } catch (e) {
        console.log(e.stack);
    }



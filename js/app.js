let title = [];
console.log(title);

let img = [];
console.log(img);

fetch("https://api.nytimes.com/svc/topstories/v2/science.json?api-key=4LyXIV1DuJwKATjj8n6ixGA95c8UAVLy")
    .then(response => response.json())
    .then((data) => {

        console.log(data.results[0].multimedia[0].url)
        console.log(data.results[0])

        for (let i = 0; i < 10; i++) {
            title.push(data.results[i].title);
            img.push(data.results[i].multimedia[0]);
        }

        document.getElementById("demo0").innerText = title[0];
        document.getElementById("demo1").innerText = title[1];
        document.getElementById("demo2").innerText = title[2];
        document.getElementById("demo3").innerText = title[3];
        document.getElementById("demo4").innerText = title[4];
        document.getElementById("demo5").innerText = title[5];
        document.getElementById("demo6").innerText = title[6];
        document.getElementById("demo7").innerText = title[7];
        document.getElementById("demo8").innerText = title[8];
        document.getElementById("demo9").innerText = title[9];


        document.getElementById("picture0").src = img[0].url;
        document.getElementById("picture1").src = img[1].url;
        document.getElementById("picture2").src = img[2].url;
        document.getElementById("picture3").src = img[3].url;
        document.getElementById("picture4").src = img[4].url;
        document.getElementById("picture5").src = img[5].url;
        document.getElementById("picture6").src = img[7].url;
        document.getElementById("picture7").src = img[7].url;
        document.getElementById("picture8").src = img[8].url;
        document.getElementById("picture9").src = img[9].url;

    })

// console.log(data.results[0])
let img = [];
console.log(img);

let title = [];
console.log(title);

let abstract = [];
console.log(abstract);

let fullArticle = [];
console.log(fullArticle);

let updated_date = [];
console.log(updated_date);

fetch("https://api.nytimes.com/svc/topstories/v2/politics.json?api-key=4LyXIV1DuJwKATjj8n6ixGA95c8UAVLy")
    .then(response => response.json())
    .then((data) => {


        console.log(data.results[0])

        for (let i = 0; i < 10; i++) {
            img.push(data.results[i].multimedia[0]);
            title.push(data.results[i].title);
            abstract.push(data.results[i].abstract);
            fullArticle.push(data.results[i].url);
            updated_date.push(data.results[i].updated_date);
        }

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

        document.getElementById("abstract0").innerText = abstract[0];
        document.getElementById("abstract1").innerText = abstract[1];
        document.getElementById("abstract2").innerText = abstract[2];
        document.getElementById("abstract3").innerText = abstract[3];
        document.getElementById("abstract4").innerText = abstract[4];
        document.getElementById("abstract5").innerText = abstract[5];
        document.getElementById("abstract6").innerText = abstract[6];
        document.getElementById("abstract7").innerText = abstract[7];
        document.getElementById("abstract8").innerText = abstract[8];
        document.getElementById("abstract9").innerText = abstract[9];

        document.getElementById("fullArticle0").href = fullArticle[0];
        document.getElementById("fullArticle1").href = fullArticle[1];
        document.getElementById("fullArticle2").href = fullArticle[2];
        document.getElementById("fullArticle3").href = fullArticle[3];
        document.getElementById("fullArticle4").href = fullArticle[4];
        document.getElementById("fullArticle5").href = fullArticle[5];
        document.getElementById("fullArticle6").href = fullArticle[7];
        document.getElementById("fullArticle7").href = fullArticle[7];
        document.getElementById("fullArticle8").href = fullArticle[8];
        document.getElementById("fullArticle9").href = fullArticle[9];

        document.getElementById("updated_date0").innerText = updated_date[0];
        document.getElementById("updated_date1").innerText = updated_date[1];
        document.getElementById("updated_date2").innerText = updated_date[2];
        document.getElementById("updated_date3").innerText = updated_date[3];
        document.getElementById("updated_date4").innerText = updated_date[4];
        document.getElementById("updated_date5").innerText = updated_date[5];
        document.getElementById("updated_date6").innerText = updated_date[6];
        document.getElementById("updated_date7").innerText = updated_date[7];
        document.getElementById("updated_date8").innerText = updated_date[8];
        document.getElementById("updated_date9").innerText = updated_date[9];


    })

// console.log(data.results[0])
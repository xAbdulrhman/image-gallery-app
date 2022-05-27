////////      Begin of Home Page JS 11111111
let imagesAfterS = document.getElementById("result")
let imageOnSearch = document.getElementById("SearchResult")
let FilteredImgs = document.getElementById("FilterResult")

let images = [
    { name: 'cisco', likes: 7, url: 'https://i.insider.com/50083d5269bedd1450000000?width=600&format=jpeg&auto=webp' },
    { name: 'oracle', likes: 1, url: 'https://logowik.com/content/uploads/images/153_oracle.jpg' },
    { name: 'ea', likes: 2, url: 'https://bonitaworldmediaproduction.com/wp-content/uploads/2017/12/ea-sports-logo.jpg' },
    { name: 'sega', likes: 9, url: 'https://fontmeme.com/images/Sega-Logo.jpg' },
    { name: 'atari', likes: 6, url: 'https://logowik.com/content/uploads/images/atari7759.jpg' },
    { name: 'asus', likes: 8, url: 'https://logowik.com/content/uploads/images/424_asus.jpg' },
    { name: 'playstaion', likes: 5, url: 'https://acclaimmag.com/wp-content/uploads/2013/02/Sony-PlayStation-Logo.jpg' },
    { name: 'ibm', likes: 3, url: 'https://upload.wikimedia.org/wikipedia/commons/f/fc/IBM_logo_in.jpg' }
];

// Sort array of images based on number of likes
images.sort(compare);

function compare(a, b) {
    if (a.likes < b.likes) {
        return -1;
    } else if (a.likes > b.likes) {
        return 1;
    } else {
        return 0;
    }
}

// loop through images 
for (image of images) {
    let imgElem = document.createElement("img");
    imgElem.src = image.url;
    imgElem.alt = image.name;
    imgElem.height = 290;
    imgElem.width = 310;
    imagesAfterS.append(imgElem);
}
////////     End of Home Page 111111111


////////      Begin of Search Page JS 2222222222

function filterImgName() {
    let input = document.getElementById("sh");
    let word = input.value.toLowerCase();
    let c = images;
    doFilter(c, word);

}

function doFilter(c, word) {
    let AnImage = document.createElement("img");
    for (let i = 0; i < c.length; i++) {
        let txtValue = c[i].name;
        if (txtValue.toLowerCase().indexOf(word) > -1) {
            document.getElementById("mm").style.display = "none"

            AnImage.src = c[i].url
            AnImage.height = 400;
            AnImage.width = 800;

            imageOnSearch.replaceChildren(AnImage);
        } else {
            document.getElementById("mm").style.display = "none"
            imageOnSearch.style.display = ""

        }
        if (document.getElementById("sh").value === "") {
            document.getElementById("mm").style.display = ""
            imageOnSearch.style.display = "none"
        }
    }
}
////////     End of Search Page JS 22222222


////////      Begin of Upload Page JS 33333333


//comparing LIKES

function f1() {
    images.sort(compare);

    function compare(a, b) {
        if (a.likes < b.likes) {
            return -1;
        } else if (a.likes > b.likes) {
            return 1;
        } else {
            return 0;
        }
    }
    loopingImg()

}

function f2() {

    images.sort(compare);

    function compare(a, b) {
        if (a.likes > b.likes) {
            return -1;
        } else if (a.likes < b.likes) {
            return 1;
        } else {
            return 0;
        }
    }
    loopingImg()
}

//comparing NAMES

function f3() {
    images.sort(compare);

    function compare(a, b) {
        if (a.name < b.name) {
            return -1;
        } else if (a.name > b.name) {
            return 1;
        } else {
            return 0;
        }
    }
    loopingImg()

}

function f4() {
    images.sort(compare);

    function compare(a, b) {
        if (a.name < b.name) {
            return 1;
        } else if (a.name > b.name) {
            return -1;
        } else {
            return 0;
        }
    }


    loopingImg()
}

//sorting 

function loopingImg() {

    let i = 0
    for (imageItem of images) {
        let imgElem = document.createElement("img");
        imgElem.src = imageItem.url;
        imgElem.height = 290;
        imgElem.width = 310;

        if (FilteredImgs.childElementCount == 8) {
            FilteredImgs.children[i].replaceWith(imgElem)
        } else {
            FilteredImgs.append(imgElem);
        }
        i++;
    }
}
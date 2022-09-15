var stars = document.getElementsByClassName("rating");

function draw_rating(rate)
{
    for (var i = 0; i < rate; i++)
    {
        stars[i].classList.remove("bi-star");
        stars[i].classList.add("bi-star-fill");
    }
    for (var i = rate; i < 5; i++)
    {
        stars[i].classList.add("bi-star");
        stars[i].classList.remove("bi-star-fill");
    }
}

function clear_rate()
{
    for (var i = 0; i < 5; i++)
    {
        stars[i].classList.add("bi-star");
        stars[i].classList.remove("bi-star-fill");
    }
}
function add_rating(received_score, product_id, csrf_token)
{
    
      var json_data = {
        score: received_score,
        product_id: product_id,
    };

    fetch("/send-rating", {
        method: "post",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": csrf_token,
        },
        body: JSON.stringify(json_data),
    })
    .then(result => result.text())
    .then(result => {
        
            alert("امتیاز شما با موفقیت ثبت شد.");
          
    });
    for (var i = 0; i < received_score; i++)
    {
        stars[i].classList.add("bi-star-fill");
      //  stars[i].classList.remove("bi-star-fill");
    }
}
function add_to_cart(product_id, csrf_token)
{    
      var json_data = {
        product_id: product_id,
        
    };

    fetch("/add-to-cart", {
        method: "post",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": csrf_token,
        },
        body: JSON.stringify(json_data),
    })
    .then(result => result.text())
    .then(result => {
     
            alert(result);

    });
}
function send_comment(product_id) {
    let form = document.getElementById("form-comment-"+product_id);
    let form_data = new FormData(form);
    fetch("/send-comment", {
        method: "post",
        body: form_data
    }).then(result => result.text()).then(result => {
        console.log(result);
        if (result == 1) {
            let list_comments = document.getElementById("list-comments-"+product_id);
            let li = document.createElement("LI");
            li.classList.add("list-group-item");
            li.classList.add("list-group-item-action");
            let p = document.createElement("P");
            p.classList.add("mb-1");
            p.innerHTML = form_data.get("text");
            li.appendChild(p);
            list_comments.appendChild(li);
        }
    }).catch(error => {
        alert(error);
    });
}

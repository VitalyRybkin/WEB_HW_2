get()
// setInterval(get, 2000)
var paragraph 

// function sendMessage() {
//     let userName = document.getElementById("user-name").value
//     let userMessage = document.getElementById("user-message").value

//     if (userName == '') {
//         paragraph = document.createElement("p")
//         paragraph.innerHTML = "<b>ADMIN</b>:</br>You didn't introduce your self!"
//         document.getElementById("messages").append(paragraph)
//         return
//     }

//     else {
//         if (userMessage == '') {
//             paragraph = document.createElement("p")
//             paragraph.innerHTML = `<b>ADMIN</b>:</br>${userName}, your message is empty!`
//             document.getElementById("messages").append(paragraph)
//             return
//         }

//     }

//     paragraph = document.createElement("p")
//     paragraph.style.paddingLeft = '30px'
//     paragraph.innerHTML = `<b>${userName}</b>:</br>${userMessage}`
//     document.getElementById("messages").append(paragraph)


//     paragraph = document.createElement("p")
//     paragraph.innerHTML = "<b>ADMIN</b>:</br>Your question is transfered to our assitant!</br> Please wait!"
//     document.getElementById("messages").append(paragraph)

//     document.getElementById("user-message").value = ""

    
// }

function get() {
    (async () => {
        const response = await fetch('chat.php')
        const answer = await response.text()
        console.log(answer)
        document.getElementById("messages").innerText = answer
    }
    )();

    // fetch('chat.php', {
    //     method: 'get',
    // }).then(function(response) {
    //         if (response.status >= 200 && response.status < 300) {
    //             return response.text()
    //         }
    //         throw new Error(response.statusText)
    //     })
    //     .then(function(response) {
    //         console.log(response);
    //     })

}

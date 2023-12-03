var paragraph 

function sendMessage() {
    let userName = document.getElementById("user-name").value
    let userMessage = document.getElementById("user-message").value

    if (userName == '') {
        paragraph = document.createElement("p")
        paragraph.innerHTML = "<b>ADMIN</b>:</br>You didn't introduce your self!"
        document.getElementById("messages").append(paragraph)
        return
    }

    else {
        if (userMessage == '') {
            paragraph = document.createElement("p")
            paragraph.innerHTML = `<b>ADMIN</b>:</br>${userName}, your message is empty!`
            document.getElementById("messages").append(paragraph)
            return
        }

        paragraph = document.createElement("p")
        paragraph.style.paddingLeft = '30px'
        paragraph.innerHTML = `<b>${userName}</b>:</br>${userMessage}`
        document.getElementById("messages").append(paragraph)


        paragraph = document.createElement("p")
        paragraph.innerHTML = "<b>ADMIN</b>:</br>Your question is transfered to our assitant!</br> Please wait!"
        document.getElementById("messages").append(paragraph)

        document.getElementById("user-message").value = ""
    }


}

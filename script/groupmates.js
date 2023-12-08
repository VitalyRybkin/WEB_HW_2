getGroupmates()

function getGroupmates(){

    (async () => {
        const array = await fetch('groupmates.php')
        const response = array.json()
        // for (i in response) {
        //     console.log(response)
        // }
        document.getElementById('groupmates').innerText = response
    }
    )();

    // $.ajax({
    //     type: "POST",
    //     url: "~/pythoncode.py",
    //     data: { param: text}
    //   }).done(function( o ) {
    //      // do something
    //   });

    // fetch('groupmates.php')
    // .then(response => response.json())
    // .then(data => {
    //     console.log(data); // Output: Hello from PHP!
    //     // console.log(data.numbers); // Output: [1, 2, 3, 4, 5]
    // });

}
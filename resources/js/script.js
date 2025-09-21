function date() {
    const today = new Date();

    const year = today.getFullYear();       // 2025
    const month = today.getMonth() + 1;     // 9 (months are 0-indexed)
    const day = today.getDate();            // 20     // 00

    //console.log(`${day}/${month}/${year}`); // 20/9/2025
    document.getElementById("date").innerHTML = `${day}/${month}/${year}`;
}
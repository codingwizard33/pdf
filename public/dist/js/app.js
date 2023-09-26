function success() {
    if (document.getElementById("login").value === "" || document.getElementById("pas").value === "") {
        document.getElementById('continue').disabled = true;
    } else {
        document.getElementById('continue').disabled = false;
    }
}

function chart(id, labels, data, label) {
    new Chart(document.getElementById(id), {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: [
                    'rgba(77, 255, 223, 1)',
                    'rgba(77, 161, 255, 1)',
                ],
                label: label,
                borderColor: "#157DFC",
                fill: false
            },
            ]
        },
        options: {}
    });
}


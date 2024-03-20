document.addEventListener('DOMContentLoaded', fetchData);

function fetchData() {
    fetch('/data')
        .then(response => response.json())
        .then(data => {
            const dataList = document.getElementById('dataList');
            dataList.innerHTML = '';

            data.forEach(item => {
                const li = document.createElement('li');
                li.textContent = `ID: ${item.id}, Name: ${item.name}, Age: ${item.age}`;
                dataList.appendChild(li);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}
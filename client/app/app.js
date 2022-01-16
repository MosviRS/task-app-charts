
document.getElementById('add_task').addEventListener('click', async (e) => {
    const name = document.getElementById('name-task').value;
    const description = document.getElementById('descrition-task').value;
    const data = new FormData();
    data.append("json", JSON.stringify({ name: name, description: description }));
    const content = await addTask(data);
    await getItems();
    console.log(content);
});
function loadEvents() { // when the page has loaded
    const buttons = document.querySelectorAll('button.task_delete');
    buttons.forEach((item) => {
        const id_task = item.parentElement.parentElement.getAttribute('id_task');
        item.addEventListener('click', async (e) => {
            const data = new FormData();
            data.append("json", JSON.stringify({ id_task: id_task }));
            const content = await deleteTask(data);
            await getItems();
        });
    });
};

async function addTask(data) {
    const response = await fetch('../../task-app/backend/task-add.php', {
        method: 'POST',
        body: data
    }).then(res => res.json());
    return response;
}
async function deleteTask(data) {
    const response = await fetch('../../task-app/backend/task-delete.php', {
        method: 'POST',
        body: data
    }).then(res => res.json());
    return response;
}
async function getItems() {
    const table = document.getElementById('table-task');
    let template = '';
    const response = await fetch('../../task-app/backend/task-list.php')
        .then(res => res.json())
        .then((result) => {
            const content = result['status'];
            let count = 1;
            content.forEach(element => {
                template += `<tr id_task="${element.id_task}">
                                <th scope="row">${count}</th>
                                <td>${element.name}</td>
                                <td>${element.description}</td>
                                <td>
                                    <button type="button" class="task_delete btn btn-danger">Danger</button>
                                </td>
                         </tr>`
                count++;
            });
        });
    table.innerHTML = template;
    loadEvents();
}
(async function () {
    await getItems();
})();

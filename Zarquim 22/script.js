function login() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (authenticateUser(username, password)) {
        
    };
};

let plan = [
    { username: "isac", password: "bolsonaro" },
    { username: "julia", password: "erika" },
    { username: "ana", password: "lula" }
]

function authenticateUser(username, password) {
    for (let user of plan) {
        if (user.username === username && user.password === password) {
            return true;
        }
    }
    return false;
}
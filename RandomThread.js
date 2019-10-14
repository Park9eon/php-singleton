const {execSync} = require('child_process');

function runApplication(i) {
    new Promise((resolve) => {
        setTimeout(() => {
            const buffer = execSync('php Application.php');
            resolve({ i, buffer });
        }, Math.random() * 3);
    }).then(({ i, buffer }) => {
        console.log(`[${i}] ${buffer}`);
    });
}

for (let i = 0 ; i < 100 ; i++) {
    runApplication(i);
}

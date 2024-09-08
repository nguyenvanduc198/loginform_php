// $(document).ready(() =>{

// });


/* const checkEmail = () => 
     check("#email",/(^.+@.+\..+$)|(^$)/g,"This is not an email");

const check = (selector, regex, errorMessage) =>{
    const input = $(`${selector}`).val();
    const isCorrect = regex.test(input);
    if(!isCorrect){
        $(`${selector} -error`).html(errorMessage);
        $(`${selector}`).addClass(`is-invalid`);
        return;
    }
    $(`${selector} -error`).html(``);
    $(`${selector}`).removeClass(`is-invalid`);
} */

const checkEmail = () =>
    check("#email", /(^.+@.+\..+$)|(^$)/g, "This is not an email");

const check = (selector, regex, errorMessage) => {
    const input = $(`${selector}`).val();

    const isCorrect = regex.test(input);

    if (!isCorrect) {
        $(`${selector}-error`).html(errorMessage);
        $(`${selector}`).addClass(`is-invalid`);
        return;
    }
    $(`${selector}`).removeClass(`is-invalid`);
    $(`${selector}-error`).html(``);
};
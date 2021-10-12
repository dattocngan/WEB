

$(function() {
    $('form').submit(function() {
        var name = $('[name=fullname]').val()
        var gender = $('input[name="gender"]:checked').val()
        var country = $('[name=country]').val()
        var subject = $('input[name="subject"]:checked').val()
        var classroom = $('[name=classroom]').val()
        var rollno = $('[name=rollno]').val()
        var mail = $('[name=mail]').val()
        var phone = $('[name=phone]').val()
        var fb_link = $('[name=facebook-link]').val()
        var ability = $('[name=ability]').val()
        var achievement = $('[name=achievement]').val()
        var emotion = $('[name=emotion]').val()
        var formal_question1 = $('[name=formal-question1]').val()
        var formal_question2 = $('[name=formal-question2]').val()
        var formal_question3 = $('[name=formal-question3]').val()
        var formal_question4 = $('[name=formal-question4]').val()
        var main_question1 = $('[name=main-question1]').val()
        var main_question2 = ''
        var main_question3 = ''
        var main_question4 = ''
        var main_question5 = ''

        if(subject === "cndpt"){
            main_question2 = $('[name=main-question2]').val()
            main_question3 = $('[name=main-question3]').val()
        }
        if(subject === "ttdpt"){
            main_question2 = $('[name=main-question2]').val()
            main_question3 = $('[name=main-question3]').val()
            main_question4 = $('[name=main-question4]').val()
            main_question5 = $('[name=main-question5]').val()
        }

        axios.post('/cv-online', {
            'name' : name,
            'gender' : gender,
            'country' : country,
            'subject' : subject,
            'classroom' : classroom,
            'rollno' : rollno,
            'mail' : mail,
            'phone' : phone,
            'facebook_link' : fb_link,
            'ability' : ability,
            'achievement' : achievement,
            'emotion' : emotion,
            'formal_question1' : formal_question1,
            'formal_question2' : formal_question2,
            'formal_question3' : formal_question3,
            'formal_question4' : formal_question4,
            'main_question1' : main_question1,
            'main_question2' : main_question2,
            'main_question3' : main_question3,
            'main_question4' : main_question4,
            'main_question5' : main_question5
        }).then(() => {
            Swal.fire({
                title: 'Success!',
                text: 'Đăng ký thành công, bạn sẽ được chuyển về fanpage CLB',
                icon: 'success',
                confirmButtonText: 'Okey!'
            }).then(() => {
                window.location.href = "https://facebook.com/ITPTIT";
            })
        }).catch(e => {
            Swal.fire({
                title: 'Error!',
                text: 'Đăng ký không thành công: ' + e.response.data,
                icon: 'error',
                confirmButtonText: 'Đóng'
            })
        });

        return false
    })
})

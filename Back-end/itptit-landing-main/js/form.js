function postform() {
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
    var main_question6 = ''
    var main_question7 = ''
    var main_question8 = ''
    var main_question9 = ''

   
    
    if(subject === "cndpt"){
        main_question1 = ''
        main_question2 = $('[name=main-question1]').val()
        main_question3 = $('[name=main-question2]').val()
        main_question4 = $('[name=main-question3]').val()
        
    }
    if(subject === "ttdpt"){
        main_question1 = ''
        main_question5 = $('[name=main-question1]').val()
        main_question6 = $('[name=main-question2]').val()
        main_question7 = $('[name=main-question3]').val()
        main_question8 = $('[name=main-question4]').val()
        main_question9 = $('[name=main-question5]').val()
    }


    

    $.ajax({
        url: "https://docs.google.com/forms/d/e/1FAIpQLSdBuA9mwx_oo7FHjLxe9cHaOyOKKboAYToMImbQokbm7-2IDw/formResponse?",
        
        data: {"entry.2019784641": name, 
        "entry.1947861175": gender, 
        "entry.1260850389": country,
        "entry.1178908689": subject,
        "entry.1358596253": classroom, 
        "entry.1661347127": rollno,
        "entry.353051348": mail,
        "entry.1965092505": phone, 
        "entry.1447165784": fb_link,
        "entry.1501314704": ability,
        "entry.1080305039": achievement, 
        "entry.202129612": emotion,
        "entry.398498612": formal_question1,
        "entry.2041331074": formal_question2, 
        "entry.1138890151": formal_question3,
        "entry.773555376": formal_question4,
        "entry.390096612": main_question1,
        "entry.390096612": main_question2,
        "entry.1002920082": main_question3,
        "entry.1070723770": main_question4,
        "entry.1873524973": main_question5,
        "entry.950852730": main_question6,
        "entry.788876256": main_question7,
        "entry.1373966015": main_question8,
        "entry.535516083": main_question9,

        },
        type: "POST",
        dataType: "xml",
        success: function(d)
        {
        },
        error: function(x, y, z)
            {
                
                Swal.fire({
                    title: 'Success!',
                    text: 'Đăng ký thành công, bạn sẽ được chuyển về fanpage CLB',
                    icon: 'success',
                    confirmButtonText: 'Okey!'
                }).then(() => {
                    window.location.href = "https://facebook.com/ITPTIT";
                })
                
            }
    });
    return false;
}


// $(function() {
//     $('form').submit(function() {
        // var name = $('[name=fullname]').val()
        // var gender = $('input[name="gender"]:checked').val()
        // var country = $('[name=country]').val()
        // var subject = $('input[name="subject"]:checked').val()
        // var classroom = $('[name=classroom]').val()
        // var rollno = $('[name=rollno]').val()
        // var mail = $('[name=mail]').val()
        // var phone = $('[name=phone]').val()
        // var fb_link = $('[name=facebook-link]').val()
        // var ability = $('[name=ability]').val()
        // var achievement = $('[name=achievement]').val()
        // var emotion = $('[name=emotion]').val()
        // var formal_question1 = $('[name=formal-question1]').val()
        // var formal_question2 = $('[name=formal-question2]').val()
        // var formal_question3 = $('[name=formal-question3]').val()
        // var formal_question4 = $('[name=formal-question4]').val()
        // var main_question1 = $('[name=main-question1]').val()
        // var main_question2 = ''
        // var main_question3 = ''
        // var main_question4 = ''
        // var main_question5 = ''

        // if(subject === "cndpt"){
        //     main_question2 = $('[name=main-question2]').val()
        //     main_question3 = $('[name=main-question3]').val()
        // }
        // if(subject === "ttdpt"){
        //     main_question2 = $('[name=main-question2]').val()
        //     main_question3 = $('[name=main-question3]').val()
        //     main_question4 = $('[name=main-question4]').val()
        //     main_question5 = $('[name=main-question5]').val()
        // }

//         axios.post('/cv-online', {
//             'name' : name,
//             'gender' : gender,
//             'country' : country,
//             'subject' : subject,
//             'classroom' : classroom,
//             'rollno' : rollno,
//             'mail' : mail,
//             'phone' : phone,
//             'facebook_link' : fb_link,
//             'ability' : ability,
//             'achievement' : achievement,
//             'emotion' : emotion,
//             'formal_question1' : formal_question1,
//             'formal_question2' : formal_question2,
//             'formal_question3' : formal_question3,
//             'formal_question4' : formal_question4,
//             'main_question1' : main_question1,
//             'main_question2' : main_question2,
//             'main_question3' : main_question3,
//             'main_question4' : main_question4,
//             'main_question5' : main_question5
//         }).then(() => {
//             Swal.fire({
//                 title: 'Success!',
//                 text: 'Đăng ký thành công, bạn sẽ được chuyển về fanpage CLB',
//                 icon: 'success',
//                 confirmButtonText: 'Okey!'
//             }).then(() => {
//                 window.location.href = "https://facebook.com/ITPTIT";
//             })
//         }).catch(e => {
//             Swal.fire({
//                 title: 'Error!',
//                 text: 'Đăng ký không thành công: ' + e.response.data,
//                 icon: 'error',
//                 confirmButtonText: 'Đóng'
//             })
//         });

//         return false
//     })
// })

function showError(id, msg) {
  $(`#${id}`).addClass("is-invalid");
  $(`#${id}Err`).text(msg);
  $(`#${id}`).focus();
}

function clearErrors(fieldIds) {
  fieldIds.forEach((id) => {
    $(`#${id}`).removeClass("is-invalid");
    $(`#${id}Err`).text("");
  });
}

$(document).ready(function () {
    $("#property").on("change", function () {
        let property = $(this).val();
        console.log(property);
        if (property.toLowerCase() === "balemora almora".toLowerCase()) {
            $(".cottage").show();
        } else {
            $(".cottage").hide();
            $("#cottage").val("");
        }
    });
});

$(document).ready(function () {
  //booking form
  $("#bookingForm").on("submit", async function (e) {
    e.preventDefault();

    // get form values
    let name = $("#name").val().trim();
    let number = $("#number").val().trim();
    let checkin = $("#check-in").val().trim();
    let checkout = $("#check-out").val().trim();
    let room = $("#rooms").val();
    let adults = $("#adults").val();
    let children = $("#child").val();
    let property = $("#property").val();
    let cottage = "";

    // only fetch cottage if property is balemora almora
    if (property.toLowerCase() === "balemora almora") {
        cottage = $("#cottage").val();
    }

    // regular expression for name and indian phone
    let nameRex = /^[a-zA-Z. ]{2,}$/;
    let numberRex = /^[6-9][0-9]{9}$/;

    // form field to send clear error message
    let bookingFields = [
      "name",
      "number",
      "check-in",
      "check-out",
      "rooms",
      "adults",
      "child",
      "property",
      "cottage"
    ];

    clearErrors(bookingFields);

    // validation
    if (!name) return showError("name", "Please enter your name"), false;
    if (!nameRex.test(name))
      return showError("name", "Please enter a valid name"), false;

    if (!number) return showError("number", "Please enter your number"), false;
    if (!numberRex.test(number))
      return showError("number", "Please enter a valid number"), false;

    if (!checkin)
      return showError("check-in", "Please enter your check-in date"), false;
    if (!checkout)
      return showError("check-out", "Please enter your check-out date"), false;

    if (!room)
      return showError("rooms", "Please select number of rooms"), false;
    if (!adults)
      return showError("adults", "Please select number of adults"), false;
    if (!children)
      return showError("child", "Please select number of children"), false;
    if (!property)
      return showError("property", "Please select property"), false;
     
    // ✅ Only validate cottage if property = balemora almora
    if (property.toLowerCase() === "balemora almora" && !cottage) {
        return showError("cottage", "Please select cottage"), false;
    }
      
      

    let submitBtn = document.getElementById("bookingBtn");
    submitBtn.disabled = true;
    submitBtn.value = "Please Wait...";

    // current date
    let currentDate = new Date().toISOString().split("T")[0];
    // send data to google sheet
    let fd = new FormData();
    fd.append("Name", name);
    fd.append("Phone", number);
    fd.append("CheckIn", checkin);
    fd.append("Checkout", checkout);
    fd.append("Room", room);
    fd.append("Adult", adults);
    fd.append("Child", children);
    fd.append("Source", window.location.href);
    fd.append("Properties", property);
    fd.append("Query-Date", currentDate);

    try {
      let response = await fetch(
        "https://script.google.com/macros/s/AKfycbxQHUiEME7i6NDe2l6qrcSQvKqbtHZzZ_1LsJ1-5m3XKY6g_mO-zOyGnmsPlndbkPVb/exec",
        {
          method: "POST",
          body: fd,
        }
      );

      if (response.ok) {
        let result = await response.text();
        console.log("Success:", result);

        //send mail funtion to send email
        let form = "bookingForm";
        await sendMail({
          data: {
            name: name,
            phone: number,
            checkin: checkin,
            checkout: checkout,
            room: room,
            adults: adults,
            children: children,
            property: property,
            // ✅ Only send cottage if property is balemora almora
           ...(property.toLowerCase() === "balemora almora" && { cottage: cottage }),
          },
          form,
          submitBtn,
        });

        window.location.href = "thank-you.php";
      } else {
        console.error("HTTP Error:", response.status);
        alert("Something went wrong while submitting. Please try again.");
      }
    } catch (error) {
      console.error("Fetch Error:", error);
      alert("Network error. Please check your connection.");
    }
  });

  //program Enquiry form
  $("#programForm").on("submit", async function (e) {
    e.preventDefault();

    // get value from form
    let name = $("#name").val().trim();
    let number = $("#number").val().trim();
    let email = $("#email").val().trim();
    let program = $("#program").val();
    let message = $("#message").val().trim();

    // reguler expression
    let nameRex = /^[a-zA-Z. ]{2,}$/;
    let numberRex = /^[6-9][0-9]{9}$/;
    let emailRex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // form field to send clear error message
    let bookingFields = ["name", "number", "email", "program", "message"];

    clearErrors(bookingFields);

    // validation
    if (!name) return showError("name", "Please enter your name"), false;
    if (!nameRex.test(name))
      return showError("name", "Please enter a valid name"), false;

    if (!number) return showError("number", "Please enter your number"), false;
    if (!numberRex.test(number))
      return showError("number", "Please enter a valid number"), false;

    if (!email) return showError("email", "Please enter your email"), false;
    if (!emailRex.test(email))
      return showError("email", "Please enter a valid email"), false;

    if (!program) return showError("program", "Please select program"), false;
    if (!message) return showError("message", "Please enter message"), false;

    let submitBtn = document.getElementById("programBtn");
    submitBtn.disabled = true;
    submitBtn.value = "Please Wait...";
    // current date
    let currentDate = new Date().toISOString().split("T")[0];
    // send data to google sheet
    let fd = new FormData();
    fd.append("Name", name);
    fd.append("Phone", number);
    fd.append("Email", email);
    fd.append("Program", program);
    fd.append("Message", message);
    fd.append("Source", window.location.href);
    fd.append("Query-Date", currentDate);

    try {
      let response = await fetch(
        "https://script.google.com/macros/s/AKfycby8LFhJnkhK0G-Uo4SgVNoULWlpGqnD1pRQAkjg7U5xV5Rpoc9fFEKHVBoKBwFwE7nX/exec",
        {
          method: "POST",
          body: fd,
        }
      );

      if (response.ok) {
        let result = await response.text();
        console.log("Success:", result);

        //send mail funtion to send email
        let form = "programForm";
        await sendMail({
          data: {
            name: name,
            email: email,
            phone: number,
            program: program,
            message: message,
          },
          form,
          submitBtn,
        });

        window.location.href = "thank-you.php";
      } else {
        console.error("HTTP Error:", response.status);
        alert("Something went wrong while submitting. Please try again.");
      }
    } catch (error) {
      console.error("Fetch Error:", error);
      alert("Network error. Please check your connection.");
    }
  });

  //offer form
  $("#offer-form").on("submit", async function (e) {
    e.preventDefault();

    // get data from form
    let name = $("#name").val().trim();
    let email = $("#email").val().trim();
    let phone = $("#number").val().trim();
    let offer = $("#offer").val();
    let message = $("#message").val();
    let property = $("#property").val();

    // reguler expression
    let nameRex = /^[a-zA-Z. ]{2,}$/;
    let numberRex = /^[6-9][0-9]{9}$/;
    let emailRex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // form field to send clear error message
    let bookingFields = ["name", "number", "email", "offer", "message"];

    clearErrors(bookingFields);

    // validation
    if (!name) return showError("name", "Please enter your name"), false;
    if (!nameRex.test(name))
      return showError("name", "Please enter a valid name"), false;

    if (!phone) return showError("number", "Please enter your number"), false;
    if (!numberRex.test(phone))
      return showError("number", "Please enter a valid number"), false;

    if (!email) return showError("email", "Please enter your email"), false;
    if (!emailRex.test(email))
      return showError("email", "Please enter a valid email"), false;

    if (!offer) return showError("program", "Please select program"), false;
    if (!message) return showError("message", "Please enter message"), false;

    let submitBtn = document.getElementById("offerBtn");
    submitBtn.disabled = true;
    submitBtn.value = "Please Wait...";
    // current date
    let currentDate = new Date().toISOString().split("T")[0];
    // send data to google sheet

    if (property == "") {
      property = "Main Page";
    }
    let fd = new FormData();
    fd.append("Name", name);
    fd.append("Phone", phone);
    fd.append("Email", email);
    fd.append("Offer", offer);
    fd.append("Message", message);
    fd.append("Properties", property);
    fd.append("Source", window.location.href);
    fd.append("Query-Date", currentDate);

    try {
      let response = await fetch(
        "https://script.google.com/macros/s/AKfycbxLZ8Y7OzT5_kzj5UOWSlqjR4CN0-9w3LLQ1RA67NiwlUqVOCqNgIeuVr7ba0pNj3Jf/exec",
        {
          method: "POST",
          body: fd,
        }
      );

      if (response.ok) {
        let result = await response.text();
        console.log("Success:", result);

        //send mail funtion to send email
        let form = "offerForm";
        await sendMail({
          data: {
            name: name,
            email: email,
            phone: phone,
            offer: offer,
            message: message,
            property: property,
          },
          form,
          submitBtn,
        });

        window.location.href = "thank-you.php";
      } else {
        console.error("HTTP Error:", response.status);
        alert("Something went wrong while submitting. Please try again.");
      }
    } catch (error) {
      console.error("Fetch Error:", error);
      alert("Network error. Please check your connection.");
    }
  });

  //contact us form
  $("#contactForm").on("submit", async function (e) {
    e.preventDefault();

    // get form data
    let name = $("#name").val().trim();
    let email = $("#email").val().trim();
    let phone = $("#number").val().trim();
    let subject = $("#subject").val().trim();
    let property = $("#property").val();
    let message = $("#message").val().trim();

    // reguler expression
    let nameRex = /^[a-zA-Z. ]{2,}$/;
    let numberRex = /^[6-9][0-9]{9}$/;
    let emailRex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // form field to send clear error message
    let bookingFields = [
      "name",
      "number",
      "email",
      "subject",
      "property",
      "message",
    ];

    clearErrors(bookingFields);

    // validation
    if (!name) return showError("name", "Please enter your name"), false;
    if (!nameRex.test(name))
      return showError("name", "Please enter a valid name"), false;

    if (!phone) return showError("number", "Please enter your number"), false;
    if (!numberRex.test(phone))
      return showError("number", "Please enter a valid number"), false;

    if (!email) return showError("email", "Please enter your email"), false;
    if (!emailRex.test(email))
      return showError("email", "Please enter a valid email"), false;

    if (!subject) return showError("subject", "Please enter subject"), false;

    if (!property) return showError("program", "Please select program"), false;
    if (!message) return showError("message", "Please enter message"), false;

    let submitBtn = document.getElementById("contactFormBtn");
    submitBtn.disabled = true;
    submitBtn.value = "Please Wait...";
    // current date
    let currentDate = new Date().toISOString().split("T")[0];
    // send data to google sheet
    let fd = new FormData();
    fd.append("Name", name);
    fd.append("Phone", phone);
    fd.append("Email", email);
    fd.append("Subject", subject);
    fd.append("Properties", property);
    fd.append("Messaage", message);
    fd.append("Query-Date", currentDate);

    try {
      let response = await fetch(
        "https://script.google.com/macros/s/AKfycbyknmWKamob6CZgTkhKSVPhZmQEQH1mQXNyq-el50h1oKdVppGFjSmsizMaFCTa_htV/exec",
        {
          method: "POST",
          body: fd,
        }
      );

      if (response.ok) {
        let result = await response.text();
        console.log("Success:", result);

        //send mail funtion to send email
        let form = "contactForm";
        await sendMail({
          data: {
            name: name,
            email: email,
            phone: phone,
            subject: subject,
            message: message,
            property: property,
          },
          form,
          submitBtn,
        });

        window.location.href = "thank-you.php";
      } else {
        console.error("HTTP Error:", response.status);
        alert("Something went wrong while submitting. Please try again.");
      }
    } catch (error) {
      console.error("Fetch Error:", error);
      alert("Network error. Please check your connection.");
    }
  });

  //event form submission
  $("#eventForm").on("submit", async function (e) {
    e.preventDefault();

    // get form data
    let name = $("#name").val().trim();
    let email = $("#email").val().trim();
    let phone = $("#number").val().trim();
    let lawn = $("#lawn").val();
    let message = $("#message").val().trim();

    // reguler expression
    let nameRex = /^[a-zA-Z. ]{2,}$/;
    let numberRex = /^[6-9][0-9]{9}$/;
    let emailRex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // form field to send clear error message
    let bookingFields = ["name", "number", "email", "lawn", "message"];

    clearErrors(bookingFields);

    // validation
    if (!name) return showError("name", "Please enter your name"), false;
    if (!nameRex.test(name))
      return showError("name", "Please enter a valid name"), false;

    if (!phone) return showError("number", "Please enter your number"), false;
    if (!numberRex.test(phone))
      return showError("number", "Please enter a valid number"), false;

    if (!email) return showError("email", "Please enter your email"), false;
    if (!emailRex.test(email))
      return showError("email", "Please enter a valid email"), false;

    if (!lawn) return showError("program", "Please select lawn"), false;
    if (!message) return showError("message", "Please enter message"), false;

    let submitBtn = document.getElementById("eventBtn");
    submitBtn.disabled = true;
    submitBtn.value = "Please Wait...";
    // current date
    let currentDate = new Date().toISOString().split("T")[0];
    // send data to google sheet
    let fd = new FormData();
    fd.append("Name", name);
    fd.append("Phone", phone);
    fd.append("Email", email);
    fd.append("Lawn", lawn);
    fd.append("Message", message);
    fd.append("Properties", "Balemora NH27 Lucknow");
    fd.append("Query-Date", currentDate);

    try {
      let response = await fetch(
        "https://script.google.com/macros/s/AKfycbzZ8PV5aZ3oZ5S7-mTPp4zrGmYmUPRDeDj8fcpaNCmmyBA-xzdT8QIikdoGM2Fo0S9k/exec",
        {
          method: "POST",
          body: fd,
        }
      );

      if (response.ok) {
        let result = await response.text();
        console.log("Success:", result);

        //send mail funtion to send email
        let property = "Balemora NH27 Lucknow";
        let form = "eventForm";
        await sendMail({
          data: {
            name: name,
            email: email,
            phone: phone,
            lawn: lawn,
            message: message,
            property: property,
          },
          form,
          submitBtn,
        });
      } else {
        console.error("HTTP Error:", response.status);
        alert("Something went wrong while submitting. Please try again.");
      }
    } catch (error) {
      console.error("Fetch Error:", error);
      alert("Network error. Please check your connection.");
    }
  });

  async function sendMail({ data, form, submitBtn }) {
    $.ajax({
      url: "Mail/send-mail.php",
      type: "POST",
      data: { data, form },
      success: function (response) {
        console.log(response);
        submitBtn.disabled = false;
        submitBtn.value = "Submit";
        alert("Form submitted successfully!");

        window.location.href = "thank-you.php";
      },
      error: function (error) {
        console.log(error);
        submitBtn.disabled = false;
        submitBtn.value = "Submit";
      },
    });
  }
});

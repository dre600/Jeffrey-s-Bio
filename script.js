
  document.querySelector('form').addEventListener('submit', function (e) {
    e.form.submit(); // form.submit.

    const form = e.target;

    const name = form.elements['name'].value.trim();
    const email = form.elements['email'].value.trim();
    const opinion = form.elements['Be honest'].value.trim();
    const fan = form.elements['fan'].value;
    const psycho = form.elements['psycopath'].value;
    const reason = form.elements['gay'].value;

    // Basic validation
    if (!name || !email || !opinion || !fan || !psycho || !reason) {
      alert("Please fill out all fields.");
      return;
    }

    // Optional: log the values
    console.log({
      name,
      email,
      opinion,
      fan,
      psycho,
      reason
    });

    alert("Form submitted successfully.");
    // Uncomment below to allow real submission
    // form.submit();
  });

  document.querySelectorAll('.footer-social a').forEach(icon => {
    icon.addEventListener('click', function () {
      console.log('Clicked:', this.title);
    });
  });


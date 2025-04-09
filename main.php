<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Course Selector</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="style.css">
	<script  src="script.js"></script>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
	
	
  <style>
    /* General Styles */
    body {
      font-family: 'Arial', sans-serif;
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      margin: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
      
    }
	  
	    

    h1 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 20px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
      animation: fadeIn 1.5s ease-in-out;
      z-index: 2;
    }

    /* TV Frame */
    .tv-frame {
      width: 100%;
      max-width: 800px;
      height: 60vh;
    
      border-radius: 15px;
      
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      position: relative;
      padding: 20px;
      animation: glow 3s infinite alternate, fadeIn 1.5s ease-in-out;
      z-index: 2;
    }

    /* TV Screen */
    .tv-screen {
      width: 100%;
      height: 100%;
      
      border-radius: 10px;
      overflow: hidden;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
    }
	  
	  
	  
	  
	    h1 {
    color: white;
    font-size: 36px;
    text-shadow: 2px 2px 10px rgba(0, 212, 255, 0.8);
    margin-bottom: 20px;
  }
	  
	  

    .tv-screen p {
      animation: textFadeIn 1s ease-in-out;
    }

    .tv-screen h3 {
      animation: textFadeIn 1s ease-in-out;
    }

    /* Dropdowns */
    select {
      font-size: 1.2rem;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 8px;
      border: 2px solid #ccc;
      width: 100%;
      text-align: center;
      transition: all 0.3s ease;
      
      animation: slideIn 1s ease-in-out;
      z-index: 2;
    }

    select:hover {
      border-color: green;
      transform: scale(1.05);
      box-shadow: 0px 4px 15px white;
    }

   
    /* Animations */
    @keyframes glow {
      0% {
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
      }
      100% {
        box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.7);
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    @keyframes textFadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      0% {
        transform: translateY(-50px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    /* Background Effects */
  

  
 

 

    

  </style>
</head>
<body>
	
	
	
	<!-- Background -->
	
	
	

	<!-- Background -->
	
	
	
	
	
  <h1 >Select a Course</h1>
  <select id="courseSelect">
    <option value="">Select a course</option>
    <option value="alim">Alim Course</option>
    <option value="hifz">Hifz Course</option>
    <option value="deeniyat">Deeniyat Course</option>
    <option value="arabic">Arabic Course</option>
    <option value="computer">Computer Course</option>
  </select>

  <select id="detailsSelect" style="display: none;">
    <option value="">Select details</option>
    <option value="summary">Summary</option>
    <option value="syllabus">Syllabus</option>
    <option value="fee">Fee</option>
    <option value="method">Method</option>
    <option value="admission">Admission</option>
  </select>

  <div class="tv-frame">
    <div class="tv-screen" id="tvScreen">
      <p>Please select a course to see the details here.</p>
    </div>
  </div>





  <script>
    const courses = {
      alim: {
        summary: `
          <h3>Alim Course - Summary</h3>
          <p>A comprehensive Islamic studies program covering Fiqh, Tafseer, and Hadith.</p>
        `,
        syllabus: `
          <h3>Alim Course - Syllabus</h3>
          <p>Includes Arabic grammar, Islamic jurisprudence, Hadith, and Tafseer studies.</p>
        `,
        fee: `
          <h3>Alim Course - Fee</h3>
          <p>The total fee for this course is $500 per year.</p>
        `,
        method: `
          <h3>Alim Course - Method</h3>
          <p>Interactive online classes with weekly assignments and live Q&A sessions.</p>
        `,
        admission: `
          <h3>Alim Course - Admission</h3>
          <p>Apply online by submitting your documents on our website.</p>
        `
      },
      hifz: {
        summary: `
          <h3>Hifz Course - Summary</h3>
          <p>Dedicated program for Quran memorization with Tajweed.</p>
        `,
        syllabus: `
          <h3>Hifz Course - Syllabus</h3>
          <p>Daily Quran memorization with proper pronunciation and rules of Tajweed.</p>
        `,
        fee: `
          <h3>Hifz Course - Fee</h3>
          <p>The total fee for this course is $300 per year.</p>
        `,
        method: `
          <h3>Hifz Course - Method</h3>
          <p>Daily lessons with an expert teacher and personalized progress tracking.</p>
        `,
        admission: `
          <h3>Hifz Course - Admission</h3>
          <p>Apply online by submitting your details through our admission portal.</p>
        `
      },
      deeniyat: {
        summary: `
          <h3>Deeniyat Course - Summary</h3>
          <p>Dedicated program for Quran memorization with Tajweed.</p>
        `,
        syllabus: `
          <h3>Deeniyat Course - Syllabus</h3>
          <p>Daily Quran memorization with proper pronunciation and rules of Tajweed.</p>
        `,
        fee: `
          <h3>Deeniyat Course - Fee</h3>
          <p>The total fee for this course is $300 per year.</p>
        `,
        method: `
          <h3>Deeniyat Course - Method</h3>
          <p>Daily lessons with an expert teacher and personalized progress tracking.</p>
        `,
        admission: `
          <h3>Deeniyat Course - Admission</h3>
          <p>Apply online by submitting your details through our admission portal.</p>
        `
      },
      arabic: {
        summary: `
          <h3>Arabic Course - Summary</h3>
          <p>Dedicated program for Quran memorization with Tajweed.</p>
        `,
        syllabus: `
          <h3>Arabic Course - Syllabus</h3>
          <p>Daily Quran memorization with proper pronunciation and rules of Tajweed.</p>
        `,
        fee: `
          <h3>Arabic Course - Fee</h3>
          <p>The total fee for this course is $300 per year.</p>
        `,
        method: `
          <h3>Arabic Course - Method</h3>
          <p>Daily lessons with an expert teacher and personalized progress tracking.</p>
        `,
        admission: `
          <h3>Arabic Course - Admission</h3>
          <p>Apply online by submitting your details through our admission portal.</p>
        `
      },
      computer: {
        summary: `
          <h3>Computer Course - Summary</h3>
          <p>Dedicated program for Quran memorization with Tajweed.</p>
        `,
        syllabus: `
          <h3>Computer Course - Syllabus</h3>
          <p>Daily Quran memorization with proper pronunciation and rules of Tajweed.</p>
        `,
        fee: `
          <h3>Computer Course - Fee</h3>
          <p>The total fee for this course is $300 per year.</p>
        `,
        method: `
          <h3>Computer Course - Method</h3>
          <p>Daily lessons with an expert teacher and personalized progress tracking.</p>
        `,
        admission: `
          <h3>Computer Course - Admission</h3>
          <p>Apply online by submitting your details through our admission portal.</p>
        `
      }
    };

    const courseSelect = document.getElementById('courseSelect');
    const detailsSelect = document.getElementById('detailsSelect');
    const tvScreen = document.getElementById('tvScreen');

    courseSelect.addEventListener('change', () => {
      const selectedCourse = courseSelect.value;
      if (selectedCourse) {
        detailsSelect.style.display = 'block';
        detailsSelect.value = '';
        tvScreen.innerHTML = `<p>Select details for the ${selectedCourse} course.</p>`;
      } else {
        detailsSelect.style.display = 'none';
        tvScreen.innerHTML = `<p>Please select a course to see the details here.</p>`;
      }
    });

    detailsSelect.addEventListener('change', () => {
      const selectedCourse = courseSelect.value;
      const selectedDetail = detailsSelect.value;
      if (selectedDetail) {
        tvScreen.innerHTML = courses[selectedCourse][selectedDetail];
      }
    });

  

    
  </script>
</body>
</html>
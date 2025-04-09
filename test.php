<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
  body {
    background: #000;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    color: white;
  }
  h1 {
    color: #00d4ff;
    font-size: 36px;
    text-shadow: 2px 2px 10px rgba(0, 212, 255, 0.8);
    margin-bottom: 20px;
  }
  select {
    font-size: 1.2rem;
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: none;
    width: 80%;
    background: rgba(255, 255, 255, 0.1);
    color: white;
    text-align: center;
    transition: all 0.3s;
  }
  select:hover, select:focus {
    background: rgba(255, 255, 255, 0.2);
    outline: none;
  }
  .tv-frame {
    width: 90%;
    max-width: 800px;
    height: 60vh;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    box-shadow: 0px 0px 20px rgba(0, 212, 255, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    margin: auto;
  }
  .tv-screen {
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: #00d4ff;
    text-shadow: 1px 1px 5px rgba(0, 212, 255, 0.8);
  }
</style>

<h1>Select a Course</h1>
<select id="courseSelect" class="form-select">
  <option value="">Select a course</option>
  <option value="alim">Alim Course</option>
  <option value="hifz">Hifz Course</option>
  <option value="deeniyat">Deeniyat Course</option>
  <option value="arabic">Arabic Course</option>
  <option value="computer">Computer Course</option>
</select>

<select id="detailsSelect" class="form-select" style="display: none;">
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

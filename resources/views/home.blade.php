@extends('layouts.app')

@section('content')
<!-- Banner -->
<section id="banner" style="background-image: url('{{ asset('assets/css/images/TherapyChair.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="inner">
        <h2 style="color:#ffffff">Embrace Resilience Therapy</h2>
        <div class="text-container">
            <p>WELCOME TO<br />
				Embrace Resilience Psychotherapy and Counselling<br />
            YOUR JOURNEY STARTS HERE</p>
        </div>
    </div>
    <a href="#one" class="more scrolly" style="color: #ffffff;">Click to 
		                                                        Learn More</a>
</section>

<!-- One -->
<section id="one" class="wrapper style1 special">
    <div class="inner">
        <div class="profile-section">
            <div class="profile-image">
                <img src="{{ asset('assets/css/images/shabinaimagecounselling.jpg') }}" alt="Shabina Ishaq" class="circular-image">
            </div>
            <header class="major">
                <h2>Welcome, and thank you for visiting</h2>
                <p>I'm Shabina Ishaq, an accredited Psychotherapist and Clinical Supervisor based in South Yorkshire.</p>
            </header>
        </div>
        <div class="content">
            <p>My approach is Integrative which is tailor made to suit individual clients needs. I offer 1 to 1 therapy for adults and young people, couples counselling, and EMDR therapy. From my private practice in South Yorkshire, as well as online and telephone, I support clients through a range of challenges, including anxiety, depression, trauma, and relationship difficulties</p>
            
            <p>With over 13 years of experience and a Master's degree in Counselling and Trauma from the University of Nottingham, I've held roles as Clinical Lead for abuse and trauma services and currently work as a Specialist Mental Health and Learning Support Mentor at Universities. My extensive experience across hospice care, community services, and the voluntary sector has shaped my approach to providing compassionate, professional therapy tailored to each individual's needs.</p>
        </div>
        <ul class="icons major">
            <li><span class="icon fa-heart major style2"><span class="label">Expertise</span></span></li>
            <li><span class="icon solid fa-users major style1"><span class="label">Support</span></span></li>
            <li><span class="icon solid fa-certificate major style3"><span class="label">Qualifications</span></span></li>
        </ul>
    </div>
</section>


<section id="two" class="wrapper alt style2">
    <section class="spotlight">
        <div class="image"><img src="{{ asset('assets/css/images/DALL·E-2025-01-29-04.24.47-A-clipart-style-illustration-depicting-a-one-on-one-therapy-session.jpg') }}" alt="Your Space to Talk" /></div>
        <div class="content">
            <h2 style="color: white;">Your Space to Talk</h2>
            <p>In our sessions, you'll find a welcoming environment where you can express yourself openly without fear of judgment. Whether meeting in person or online, this is your time and space to explore your thoughts and feelings at your own pace.</p>
        </div>
    </section>
    <section class="spotlight">
        <div class="image"><img src="{{ asset('assets/css/images/depositphotos_336415028-stock-photo-person-standing-on-road-with.jpg') }}" alt="Finding Your Path" /></div>
        <div class="content">
            <h2 style="color: white;">Finding your path</h2>
            <p>Life brings many challenges - from relationship difficulties and work stress to anxiety and loss. Together, we'll explore what's troubling you, helping you understand your emotions better and discover ways to navigate through these challenging times.</p>
        </div>
    </section>
    <section class="spotlight">
        <div class="image"><img src="{{ asset('assets/css/images\DALL·E-2025-01-29-04.28.jpg') }}" alt="Growth and Understanding" /></div>
        <div class="content">
            <h2 style="color: white;">Growth and Understanding</h2>
            <p>Through our collaborative work, you'll develop deeper self-awareness and practical tools for everyday life. My role is to support you in building resilience, understanding yourself better, and making choices that align with your wellbeing.</p>
        </div>
    </section>
</section>



<!-- Three -->
<section id="three" class="wrapper style3 special">
	<div class="my-approach-section">
	  <h2 class="section-title">MY APPROACH</h2>
	  <div class="content-box">
		<p>
		  Most of us at some point in our lives will experience problems and
		  difficulties that leave us feeling emotionally drained and in despair.
		  At such times we may feel unable to cope and may need some extra
		  support. This is very common, completely natural, and there is no
		  shame in asking for help.
		</p>
		<p>
		  Life's journey can be difficult at times and we can experience many
		  challenges along the way. I offer a safe and confidential space where
		  we can work together to explore whatever is happening for you and
		  find the best way forward. Whether you're dealing with anxiety,
		  depression, relationship issues, loss, or any other personal
		  challenges, we can work together to help you understand your feelings
		  better and develop ways to cope.
		</p>
	  </div>
  
	  <h2 class="section-title">WHAT ISSUES CAN THERAPY HELP WITH?</h2>
	  <div class="content-box">
		<p>
		  I work with clients experiencing a wide range of challenges. Here are
		  some of the areas I can help with:
		</p>
		<div class="issues-grid">
		  <ul>
			<li>✅ Stress and anxiety</li>
            <li>✅ Depression</li>
            <li>✅ Trauma and PTSD</li>
            <li>✅ Relationship issues</li>
            <li>✅ Bereavement<br>
               and loss</li>
            <li>✅ Work-related stress</li>
            <li>✅ Self-esteem and confidence</li>
            <li>✅ Life transitions</li>
            <li>✅ Family issues</li>
            <li>✅ Personal development</li>
            <li>✅ Student mental health</li>
            <li>✅ Abuse recovery</li>
		  </ul>
		</div>
	  </div>
  
	  <div class="info-grid" style="display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
      <div class="info-card" style="flex: 1; min-width: 300px;">
          <h3>PROFESSIONAL MEMBERSHIPS</h3>
          <p>
              I am registered and accredited with the British Association for Counselling and Psychotherapy (BACP). I work within their ethical framework, which ensures I maintain high professional standards and engage in regular supervision and continuing professional development. I also hold professional indemnity insurance and an enhanced DBS certificate.
          </p>
      </div>
      <div class="info-card" style="flex: 1; min-width: 300px;">
          <h3>MY LOCATION</h3>
          <p>
              I work with both individuals aged 16+ and couples face-to-face or online via Zoom.
          </p>
          <p>
              <strong>Address:</strong><br />
              118 Wickersley Road<br />
              Rotherham S60 3PR
          </p>
      </div>
      <div class="info-card" style="flex: 1; min-width: 300px;">
          <h3>AVAILABILITY</h3>
          <p>Monday to Friday 9AM - 9PM</p>
          <p>(Please check with me for weekend availability)</p>
          <p>Duration of a session depends on the type of therapy:<br>(please see below)</p>
  
          <h3>FEES</h3>
          <ul>
              <li><strong>Counselling (Individual):</strong><br>£50–£60 (50–60 minutes)</li>
              <li><strong>EMDR Therapy:</strong><br>£80 (90 minutes)</li>
              <li><strong>Couples Counselling:</strong><br>£80 (90 minutes)</li>
              <li><strong>Clinical Supervision:</strong><br>£60 (60 minutes)<br>£75–£90 (90 minutes)</li>
              <li><strong>Student Supervision (until qualified):</strong><br>£60 (90 minutes)</li>
          </ul>
      </div>
  </div>
  
  
	  
	  </div>
	</div>
  </section>
  <!-- FAQ -->
<section id="faq" class="wrapper style2">
  <div class="inner" style="max-width: 800px; margin: 0 auto; text-align: center;">
      <header class="major">
          <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
      </header>
      <div class="faq-container" style="max-width: 600px; margin: 20px auto;">
          <div class="faq-item">
              <div class="faq-question" style="
                  width: 100%;
                  text-align: center;
                  padding: 15px 30px;
                  border: 1px solid #ffffff;
                  background: transparent;
                  color: #2d2d2d;
                  margin-bottom: 10px;
                  font-size: 14px;
                  letter-spacing: 2px;
                  font-weight: 500;
                  line-height: 1.4;
                  cursor: pointer;
              ">
                  WHAT CAN I EXPECT IN MY FIRST THERAPY SESSION?
              </div>
              <div class="faq-answer" style="display: none; text-align: left; padding: 0 20px; margin-bottom: 20px;">
                  In your first session, we'll discuss what brings you to therapy, your goals, and any concerns you may have. It's a safe space to explore what works best for you.
              </div>
          </div>

          <div class="faq-item">
              <div class="faq-question" style="
                  width: 100%;
                  text-align: center;
                  padding: 15px 30px;
                  border: 1px solid #ffffff;
                  background: transparent;
                  color: #2d2d2d;
                  margin-bottom: 10px;
                  font-size: 14px;
                  letter-spacing: 2px;
                  font-weight: 500;
                  line-height: 1.4;
                  cursor: pointer;
              ">
                  HOW MANY SESSIONS WILL I NEED?
              </div>
              <div class="faq-answer" style="display: none; text-align: left; padding: 0 20px; margin-bottom: 20px;">
                  The number of sessions varies based on individual needs. Some clients benefit from short-term work, while others prefer ongoing support.
              </div>
          </div>

          <div class="faq-item">
              <div class="faq-question" style="
                  width: 100%;
                  text-align: center;
                  padding: 15px 30px;
                  border: 1px solid #ffffff;
                  background: transparent;
                  color: #2d2d2d;
                  margin-bottom: 10px;
                  font-size: 14px;
                  letter-spacing: 2px;
                  font-weight: 500;
                  line-height: 1.4;
                  cursor: pointer;
              ">
                  DO YOU OFFER ONLINE SESSIONS?
              </div>
              <div class="faq-answer" style="display: none; text-align: left; padding: 0 20px; margin-bottom: 20px;">
                  Yes! I offer online therapy via Zoom, providing flexibility and accessibility for clients who prefer remote sessions.
              </div>
          </div>

          <div class="faq-item">
              <div class="faq-question" style="
                  width: 100%;
                  text-align: center;
                  padding: 15px 30px;
                  border: 1px solid #ffffff;
                  background: transparent;
                  color: #2d2d2d;
                  margin-bottom: 10px;
                  font-size: 14px;
                  letter-spacing: 2px;
                  font-weight: 500;
                  line-height: 1.4;
                  cursor: pointer;
              ">
                  IS THERAPY CONFIDENTIAL?
              </div>
              <div class="faq-answer" style="display: none; text-align: left; padding: 0 20px; margin-bottom: 20px;">
                  Yes. Everything discussed in our sessions is kept confidential, except in cases where there is a legal or ethical duty to disclose (e.g., risk of harm).
              </div>
          </div>

          <div class="faq-item">
              <div class="faq-question" style="
                  width: 100%;
                  text-align: center;
                  padding: 15px 30px;
                  border: 1px solid #ffffff;
                  background: transparent;
                  color: #2d2d2d;
                  margin-bottom: 10px;
                  font-size: 14px;
                  letter-spacing: 2px;
                  font-weight: 500;
                  line-height: 1.4;
                  cursor: pointer;
              ">
                  WHAT IS EMDR THERAPY?
              </div>
              <div class="faq-answer" style="display: none; text-align: left; padding: 0 20px; margin-bottom: 20px;">
                  EMDR (Eye Movement Desensitisation and Reprocessing) is a structured therapy that helps people process and heal from traumatic memories.<br>
                  EMDR is recommended by NICE as one of the evidence-based psychological therapies to treat adults with post-traumatic stress disorder (PTSD), complex PTSD and significant symptoms of PTSD.<br>
                  NICE guidelines are evidence-based recommendations for health and care in England and Wales. They help health and social care professionals to prevent ill health, promote good health and improve the quality of care and services.
              </div>
          </div>
      </div>
  </div>

  <script>
      document.querySelectorAll('.faq-question').forEach(question => {
          question.addEventListener('click', () => {
              const answer = question.nextElementSibling;
              answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
          });
      });
  </script>
</section>
<!-- Contact Section -->
<section id="contact" class="wrapper style4">
    <div class="inner">
        <header>
            <h2 style="color: #ffffff;">Get in touch</h2>
            <p style="color: #ffffff;">
                Feel free to contact me to arrange a free 20-minute initial conversation by telephone, where you can ask any questions you may have and we can discuss whether I am the right therapist for you at this time.
            </p>
        </header>

        <!-- Toast Notification -->
        <div id="toast-notification" style="display: none; position: fixed; bottom: 20px; right: 20px; background-color: #4caf50; color: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.2); z-index: 1000;">
            Your message has been sent successfully!
        </div>

        <!-- Contact Form -->
        <form id="contact-form" method="post" action="{{ route('contact.store') }}">
            @csrf
            <div class="row gtr-uniform">
                <!-- Name -->
                <div class="col-6 col-12-xsmall">
                    <label for="name" style="color: #ffffff;">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required />
                </div>

                <!-- Phone -->
                <div class="col-6 col-12-xsmall">
                    <label for="phone" style="color: #ffffff;">Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone number" />
                </div>

                <!-- Email -->
                <div class="col-12">
                    <label for="email" style="color: #ffffff;">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email address" required />
                </div>

                <!-- Message -->
                <div class="col-12">
                    <label for="message" style="color: #ffffff;">Message</label>
                    <textarea name="message" id="message" placeholder="Write your message here" rows="6" required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="col-12">
                    <ul class="actions">
                        <li>
                            <button type="submit" class="primary" style="text-align: center; line-height: 1.5; padding: 12px 20px;">Send Message</button>
                        </li>
                    </ul>
                </div>
            </div>
        </form>

        <!-- JavaScript to handle the toast notification -->
        <script>
            document.getElementById("contact-form").addEventListener("submit", async function (event) {
                event.preventDefault(); // Prevent default form submission

                const formData = new FormData(this);

                try {
                    const response = await fetch("{{ route('contact.store') }}", {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        }
                    });

                    if (response.ok) {
                        // Show the toast notification
                        const toast = document.getElementById("toast-notification");
                        toast.innerText = "Your message has been sent successfully!";
                        toast.style.display = "block";

                        // Hide the toast after 5 seconds
                        setTimeout(() => {
                            toast.style.display = "none";
                        }, 5000);

                        // Reset the form
                        this.reset();
                    } else if (response.status === 422) {
                        const errorData = await response.json();
                        console.log("Validation errors:", errorData.errors);
                        alert("Please check your input and try again.");
                    } else {
                        alert("Failed to send your message. Please try again.");
                    }
                } catch (error) {
                    console.error("Error submitting the form:", error);
                    alert("An error occurred. Please try again later.");
                }
            });
        </script>
        <!-- JavaScript for FAQ Toggle -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
      const questions = document.querySelectorAll(".faq-question");

      questions.forEach(question => {
          question.addEventListener("click", function () {
              // Toggle active class for clicked question
              this.classList.toggle("active");

              // Toggle answer visibility
              const answer = this.nextElementSibling;
              if (answer.style.maxHeight) {
                  answer.style.maxHeight = null;
              } else {
                  answer.style.maxHeight = answer.scrollHeight + "px";
              }
          });
      });
  });
</script>
    </div>
</section>

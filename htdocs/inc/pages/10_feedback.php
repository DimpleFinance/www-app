	          <!-- Feedback -->
	          <div class="card mb-4">
	            <div class="card-body p-4">

	              <form method="post" action="#">

	                <h2 class="h4 mb-4">
	                  Evaluate your experience with <strong class="text-primary">Smarty</strong>
	                </h2>

	                <p class="small mb-4">
	                  According to your experienceover the past few months, would you recommend us to your friends and family? 
	                  0 means 'I would not recommend' and 10 means 'I would lovely recommend'.
	                </p>

	                <div id="rate-overall" class="clearfix mb-3">

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="0" id="rate-0">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-0">0</label>
	                  </div>

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="1" id="rate-1">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-1">1</label>
	                  </div>

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="2" id="rate-2">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-2">2</label>
	                  </div>

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="3" id="rate-3">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-3">3</label>
	                  </div>

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="4" id="rate-4">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-4">4</label>
	                  </div>

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="5" id="rate-5">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-5">5</label>
	                  </div>

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="6" id="rate-6">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-6">6</label>
	                  </div>

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="7" id="rate-7">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-7">7</label>
	                  </div>

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="8" id="rate-8">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-8">8</label>
	                  </div>

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="9" id="rate-9">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-9">9</label>
	                  </div>

	                  <div class="rate-item float-start d-inline-flex me-1 mb-1">
	                    <input required class="d-none-cloaked form-check-input form-check-input-primary" name="feedback_rate" type="radio" value="10" id="rate-10">
	                    <label class="form-check-label cursor-pointer px-3 py-2 bg-gray-200 rounded-sm fw-bold small" for="rate-10">10</label>
	                  </div>

	                </div>

	                <script>/* radio : checked background */
	                  let nodes = document.querySelectorAll('#rate-overall .rate-item');
	                  nodes.forEach(function(el) {

	                    el.querySelector('input').addEventListener('click', function(e) {
	                      
	                      nodes.forEach(function(item) {

	                        item.querySelector('label').classList.remove('bg-warning-soft');
	                        item.querySelector('label').classList.add('bg-gray-200');
	                      
	                      });

	                      el.querySelector('label').classList.remove('bg-gray-200');
	                      el.querySelector('label').classList.add('bg-warning-soft');

	                    });
	                  });
	                </script>

	                <textarea class="form-control my-3" rows="3" name="feedback_body" placeholder="Please, leave us a short feedback"></textarea>

	                <button type="submit" class="btn btn-sm btn-primary d-flex align-items-center">
	                  <svg class="float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
	                    <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
	                  </svg>
	                  <span>Send</span>
	                </button>

	              </form>

	            </div>
	          </div>




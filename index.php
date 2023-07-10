<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>MayBooks</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css'>
  <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="book-store">
    <div class="header">
      <div class="browse">
        <div class="browse-category">
          Browse Category
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
            <path d="M6 9l6 6 6-6" />
          </svg>
        </div>
        <div class="search-bar">
          <input type="text" placeholder="Search Book" />
        </div>
      </div>
      <div class="header-title">May<span>Books</span></div>
      <div class="profile">
        <div class="user-profile">
          <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="user-img">
        </div>
        <div class="profile-menu">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
            <path d="M3 12h18M3 6h18M3 18h18" />
          </svg>
          Menu
        </div>
      </div>
    </div>
    <div class="book-slide">
      <div class="book js-flickity" data-flickity-options='{ "wrapAround": true }'>
        <div class="book-cell">
          <div class="book-img">
            <img src="./assets/image_1/01.png" alt="" class="book-photo">
          </div>
          <div class="book-content">
            <div class="book-title">กล้วยสองปลี</div>
            <div class="book-author">by ปาริชาต เกื้อทอง</div>
            <div class="rate">
              <fieldset class="rating">
                <input type="checkbox" id="star5" name="rating" value="5" />
                <label class="full" for="star5"></label>
                <input type="checkbox" id="star4" name="rating" value="4" />
                <label class="full" for="star4"></label>
                <input type="checkbox" id="star3" name="rating" value="3" />
                <label class="full" for="star3"></label>
                <input type="checkbox" id="star2" name="rating" value="2" />
                <label class="full" for="star2"></label>
                <input type="checkbox" id="star1" name="rating" value="1" />
                <label class="full" for="star1"></label>
              </fieldset>
              <span class="book-voters">1.987 voters</span>
            </div>
            <div class="book-sum">Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years. </div>
            <a href="./book1/" style="text-decoration: none;">
              <div class="book-see">อ่านหนังสือ</div>
            </a>
          </div>
        </div>
        <div class="book-cell">
          <div class="book-img">
            <img src="./assets/image_5/01.png" alt="" class="book-photo">
          </div>
          <div class="book-content">
            <div class="book-title">หมาป่ากับต้นไม้ศักดิ์สิทธิ์</div>
            <div class="book-author">by Claudia Gray</div>
            <div class="rate">
              <fieldset class="rating blue">
                <input type="checkbox" id="star6" name="rating" value="5" />
                <label class="full1" for="star6"></label>
                <input type="checkbox" id="star7" name="rating" value="4" />
                <label class="full1" for="star7"></label>
                <input type="checkbox" id="star8" name="rating" value="3" />
                <label class="full1" for="star8"></label>
                <input type="checkbox" id="star9" name="rating" value="2" />
                <label class="full1" for="star9"></label>
                <input type="checkbox" id="star10" name="rating" value="1" />
                <label class="full1" for="star10"></label>
              </fieldset>
              <span class="book-voters">1.987 voters</span>
            </div>
            <div class="book-sum">The hunt for each splinter of Paul's soul sends Marguerite racing through a war-torn San Francisco.</div>
            <div class="book-see book-blue">See The Book</div>
          </div>
        </div>
        <div class="book-cell">
          <div class="book-img">
            <img src="./assets/image_2/01.png" alt="" class="book-photo">
          </div>
          <div class="book-content">
            <div class="book-title">เกาะหนู เกาะแมว</div>
            <div class="book-author">by Ruth Ozeki</div>
            <div class="rate">
              <fieldset class="rating purple">
                <input type="checkbox" id="star11" name="rating" value="5" />
                <label class="full" for="star11"></label>
                <input type="checkbox" id="star12" name="rating" value="4" />
                <label class="full" for="star12"></label>
                <input type="checkbox" id="star13" name="rating" value="3" />
                <label class="full" for="star13"></label>
                <input type="checkbox" id="star14" name="rating" value="2" />
                <label class="full" for="star14"></label>
                <input type="checkbox" id="star15" name="rating" value="1" />
                <label class="full" for="star15"></label>
              </fieldset>
              <span class="book-voters">1.987 voters</span>
            </div>
            <div class="book-sum">In Tokyo, sixteen-year-old Nao has decided there’s only one escape from her aching loneliness and her classmates’ bullying.</div>
            <div class="book-see book-pink">See The Book</div>
          </div>
        </div>
        <div class="book-cell">
          <div class="book-img">
            <img src="./assets/image_4/01.png" alt="" class="book-photo">
          </div>
          <div class="book-content">
            <div class="book-title">นายแรง</div>
            <div class="book-author">by F.Scott Fitzgerald</div>
            <div class="rate">
              <fieldset class="rating yellow">
                <input type="checkbox" id="star16" name="rating" value="5" />
                <label class="full" for="star16"></label>
                <input type="checkbox" id="star17" name="rating" value="4" />
                <label class="full" for="star17"></label>
                <input type="checkbox" id="star18" name="rating" value="3" />
                <label class="full" for="star18"></label>
                <input type="checkbox" id="star19" name="rating" value="2" />
                <label class="full" for="star19"></label>
                <input type="checkbox" id="star20" name="rating" value="1" />
                <label class="full" for="star20"></label>
              </fieldset>
              <span class="book-voters">1.987 voters</span>
            </div>
            <div class="book-sum">The Great Gatsby, F. Scott Fitzgerald’s third book, stands as the supreme achievement of his career.</div>
            <div class="book-see book-yellow">See The Book</div>
          </div>
        </div>
        <div class="book-cell">
          <div class="book-img">
            <img src="./assets/image_3/01.png" alt="" class="book-photo">
          </div>
          <div class="book-content">
            <div class="book-title">เขาทะนาน</div>
            <div class="book-author">by Jojo Moyes</div>
            <div class="rate">
              <fieldset class="rating dark-purp">
                <input type="checkbox" id="star21" name="rating" value="5" />
                <label class="full" for="star21"></label>
                <input type="checkbox" id="star22" name="rating" value="4" />
                <label class="full" for="star22"></label>
                <input type="checkbox" id="star23" name="rating" value="3" />
                <label class="full" for="star23"></label>
                <input type="checkbox" id="star24" name="rating" value="2" />
                <label class="full" for="star24"></label>
                <input type="checkbox" id="star25" name="rating" value="1" />
                <label class="full" for="star25"></label>
              </fieldset>
              <span class="book-voters">1.987 voters</span>
            </div>
            <div class="book-sum">Louisa Clark is no longer just an ordinary girl living an ordinary life. After the transformative six months spent.</div>
            <div class="book-see book-purple">See The Book</div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-wrapper">
      <!-- <div class="books-of">
        <div class="week">
          <div class="author-title">Author of the week</div>
          <div class="author">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="author-img">
            <div class="author-name">Sebastian Jeremy</div>
          </div>
          <div class="author">
            <img src="https://images.unsplash.com/photo-1586297098710-0382a496c814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="" class="author-img">
            <div class="author-name">Jonathan Doe</div>
          </div>
          <div class="author">
            <img src="https://images.unsplash.com/photo-1573140247632-f8fd74997d5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="author-img">
            <div class="author-name">Angeline Summer</div>
          </div>
          <div class="author">
            <img src="https://pbs.twimg.com/profile_images/737221709267374081/sdwta9Oh.jpg" alt="" class="author-img">
            <div class="author-name">Noah Jones</div>
          </div>
          <div class="author">
            <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="author-img">
            <div class="author-name">Tommy Adam</div>
          </div>
          <div class="author">
            <img src="https://images.unsplash.com/photo-1546961329-78bef0414d7c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="author-img">
            <div class="author-name">Ian Cassandra</div>
          </div>
        </div>
        <div class="week year">
          <div class="author-title">Books of the year</div>

          <div class="year-book">
            <img src="./assets/image_4/back.png" alt="" class="year-book-img">
            <div class="year-book-content">
              <div class="year-book-name">นายแรง</div>
              <div class="year-book-author">by Elif Shafak</div>
            </div>
          </div>
          <div class="year-book">
            <img src="./assets/image_3/02.png" alt="" class="year-book-img">
            <div class="year-book-content">
              <div class="year-book-name">เขาทะนาน</div>
              <div class="year-book-author">by Julia Phillips</div>
            </div>
          </div>
          <div class="year-book">
            <img src="./assets/image_1/26.png" alt="" class="year-book-img">
            <div class="year-book-content">
              <div class="year-book-name">กล้วยสองปลี</div>
              <div class="year-book-author">by Valeria Luiselli</div>
            </div>
          </div>
          <div class="year-book">
            <img src="./assets/image_2/back.png" alt="" class="year-book-img">
            <div class="year-book-content">
              <div class="year-book-name">เกาะหนู เกาะแมว</div>
              <div class="year-book-author">by Dean Koontz</div>
            </div>
          </div>
          <div class="year-book">
            <img src="./assets/image_5/back.png" alt="" class="year-book-img">
            <div class="year-book-content">
              <div class="year-book-name">หมาป่ากับต้นไม้ศักดิ์สิทธิ์</div>
              <div class="year-book-author">by Adam Higginbotham</div>
            </div>
          </div>
          
        </div>
        <div class="overlay"></div>
      </div> -->
      <div class="popular-books">
        <div class="main-menu">
          <div class="genre">Popular by Genre</div>
          <!-- <div class="book-types">
            <a href="#" class="book-type active"> All Genres</a>
            <a href="#" class="book-type"> Business</a>
            <a href="#" class="book-type"> Science</a>
            <a href="#" class="book-type"> Fiction</a>
            <a href="#" class="book-type"> Philosophy</a>
            <a href="#" class="book-type"> Biography</a>
          </div> -->
        </div>
        <div class="book-cards">
          <div class="book-card">
            <div class="content-wrapper">
              <img src="./assets/image_4/back.png" alt="" class="book-card-img">
              <div class="card-content">
                <div class="book-name">นายแรง</div>
                <div class="book-by">by Richard Russo</div>
                <div class="rate">
                  <fieldset class="rating book-rate">
                    <input type="checkbox" id="star-c1" name="rating" value="5">
                    <label class="full" for="star-c1"></label>
                    <input type="checkbox" id="star-c2" name="rating" value="4">
                    <label class="full" for="star-c2"></label>
                    <input type="checkbox" id="star-c3" name="rating" value="3">
                    <label class="full" for="star-c3"></label>
                    <input type="checkbox" id="star-c4" name="rating" value="2">
                    <label class="full" for="star-c4"></label>
                    <input type="checkbox" id="star-c5" name="rating" value="1">
                    <label class="full" for="star-c5"></label>
                  </fieldset>
                  <span class="book-voters card-vote">1.987 voters</span>
                </div>
                <div class="book-sum card-sum">Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years. </div>
              </div>
            </div>
            <!-- <div class="likes">
              <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
              </div>
              <div class="like-name"><span>Samantha William</span> and<span> 2 other friends</span> like this</div>
            </div> -->
          </div>
          <div class="book-card">
            <div class="content-wrapper">
              <img src="./assets/image_3/back.png" alt="" class="book-card-img">
              <div class="card-content">
                <div class="book-name">เขาทะนาน</div>
                <div class="book-by">by Angie Cruz</div>
                <div class="rate">
                  <fieldset class="rating book-rate">
                    <input type="checkbox" id="star-c6" name="rating" value="5">
                    <label class="full" for="star-c6"></label>
                    <input type="checkbox" id="star-c7" name="rating" value="4">
                    <label class="full" for="star-c7"></label>
                    <input type="checkbox" id="star-c8" name="rating" value="3">
                    <label class="full" for="star-c8"></label>
                    <input type="checkbox" id="star-c9" name="rating" value="2">
                    <label class="full" for="star-c9"></label>
                    <input type="checkbox" id="star-c10" name="rating" value="1">
                    <label class="full" for="star-c10"></label>
                  </fieldset>
                  <span class="book-voters card-vote">1.987 voters</span>
                </div>
                <div class="book-sum card-sum">Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years. </div>
              </div>
            </div>
            <!-- <div class="likes">
              <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
              <div class="like-name"><span>Kimberly Jones</span> like this</div>
            </div> -->
          </div>
          <div class="book-card">
            <div class="content-wrapper">
              <img src="./assets/image_1/26.png" alt="" class="book-card-img">
              <div class="card-content">
                <div class="book-name">กล้วยสองปลี</div>
                <div class="book-by">by Regina Porter</div>
                <div class="rate">
                  <fieldset class="rating book-rate">
                    <input type="checkbox" id="star-c11" name="rating" value="5">
                    <label class="full" for="star-c11"></label>
                    <input type="checkbox" id="star-c12" name="rating" value="4">
                    <label class="full" for="star-c12"></label>
                    <input type="checkbox" id="star-c13" name="rating" value="3">
                    <label class="full" for="star-c13"></label>
                    <input type="checkbox" id="star-c14" name="rating" value="2">
                    <label class="full" for="star-c14"></label>
                    <input type="checkbox" id="star-c15" name="rating" value="1">
                    <label class="full" for="star-c15"></label>
                  </fieldset>
                  <span class="book-voters card-vote">1.987 voters</span>
                </div>
                <div class="book-sum card-sum">Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years. </div>
              </div>
            </div>
            <!-- <div class="likes">
              <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
              </div>
              <div class="like-name"><span>Adam</span> and<span> Kimberly</span> like this</div>
            </div> -->
          </div>
          <div class="book-card">
            <div class="content-wrapper">
              <img src="./assets/image_2/back.png" alt="" class="book-card-img">
              <div class="card-content">
                <div class="book-name">เกาะหนู เกาะแมว</div>
                <div class="book-by">by James Lasdun</div>
                <div class="rate">
                  <fieldset class="rating book-rate">
                    <input type="checkbox" id="star-c16" name="rating" value="5">
                    <label class="full" for="star-c16"></label>
                    <input type="checkbox" id="star-c17" name="rating" value="4">
                    <label class="full" for="star-c17"></label>
                    <input type="checkbox" id="star-18" name="rating" value="3">
                    <label class="full" for="star-c18"></label>
                    <input type="checkbox" id="star-c19" name="rating" value="2">
                    <label class="full" for="star-c19"></label>
                    <input type="checkbox" id="star-c20" name="rating" value="1">
                    <label class="full" for="star-c20"></label>
                  </fieldset>
                  <span class="book-voters card-vote">1.987 voters</span>
                </div>
                <div class="book-sum card-sum">Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years. </div>
              </div>
            </div>
            <!-- <div class="likes">
              <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
              </div>
              <div class="like-name"><span>Samantha William</span> and<span> 2 other friends</span> like this</div>
            </div> -->
          </div>
          <div class="book-card">
            <div class="content-wrapper">
              <img src="./assets/image_5/back.png" alt="" class="book-card-img">
              <div class="card-content">
                <div class="book-name">หมาป่ากับต้นไม้ศักดิ์สิทธิ์</div>
                <div class="book-by">by Darcey Steinke</div>
                <div class="rate">
                  <fieldset class="rating book-rate">
                    <input type="checkbox" id="star-c21" name="rating" value="5">
                    <label class="full" for="star-c21"></label>
                    <input type="checkbox" id="star-c22" name="rating" value="4">
                    <label class="full" for="star-c22"></label>
                    <input type="checkbox" id="star-c23" name="rating" value="3">
                    <label class="full" for="star-c23"></label>
                    <input type="checkbox" id="star-c24" name="rating" value="2">
                    <label class="full" for="star-c24"></label>
                    <input type="checkbox" id="star-c25" name="rating" value="1">
                    <label class="full" for="star-c25"></label>
                  </fieldset>
                  <span class="book-voters card-vote">1.987 voters</span>
                </div>
                <div class="book-sum card-sum">Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years. </div>
              </div>
            </div>
            <!-- <div class="likes">
              <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
              </div>
              <div class="like-name"><span>Angelina Stone</span> and<span> 2 other friends</span> like this</div>
            </div> -->
          </div>
          <!-- <div class="book-card">
            <div class="content-wrapper">
              <img src="https://images-na.ssl-images-amazon.com/images/I/61Vc+xM23GL.jpg" alt="" class="book-card-img">
              <div class="card-content">
                <div class="book-name">Picnic Comma Lightning</div>
                <div class="book-by">by Lucy Parker</div>
                <div class="rate">
                  <fieldset class="rating book-rate">
                    <input type="checkbox" id="star-c1" name="rating" value="5">
                    <label class="full" for="star-c1"></label>
                    <input type="checkbox" id="star-c2" name="rating" value="4">
                    <label class="full" for="star-c2"></label>
                    <input type="checkbox" id="star-c3" name="rating" value="3">
                    <label class="full" for="star-c3"></label>
                    <input type="checkbox" id="star-c4" name="rating" value="2">
                    <label class="full" for="star-c4"></label>
                    <input type="checkbox" id="star-c5" name="rating" value="1">
                    <label class="full" for="star-c5"></label>
                  </fieldset>
                  <span class="book-voters card-vote">1.987 voters</span>
                </div>
                <div class="book-sum card-sum">Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years. </div>
              </div>
            </div>
            <div class="likes">
              <div class="like-profile">
                <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
              </div>
              <div class="like-name"><span>George</span> and<span> Mike</span> like this</div>
            </div>
          </div>
          <div class="book-card">
            <div class="content-wrapper">
              <img src="https://prodimage.images-bn.com/pimages/9780525655633_p0_v5_s1200x630.jpg" alt="" class="book-card-img">
              <div class="card-content">
                <div class="book-name">Very Nica</div>
                <div class="book-by">by Lucy Parker</div>
                <div class="rate">
                  <fieldset class="rating book-rate">
                    <input type="checkbox" id="star-c1" name="rating" value="5">
                    <label class="full" for="star-c1"></label>
                    <input type="checkbox" id="star-c2" name="rating" value="4">
                    <label class="full" for="star-c2"></label>
                    <input type="checkbox" id="star-c3" name="rating" value="3">
                    <label class="full" for="star-c3"></label>
                    <input type="checkbox" id="star-c4" name="rating" value="2">
                    <label class="full" for="star-c4"></label>
                    <input type="checkbox" id="star-c5" name="rating" value="1">
                    <label class="full" for="star-c5"></label>
                  </fieldset>
                  <span class="book-voters card-vote">1.987 voters</span>
                </div>
                <div class="book-sum card-sum">Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years. </div>
              </div>
            </div>
            <div class="likes">
              <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
              </div>
              <div class="like-name"><span>Samantha William</span> and<span> 2 other friends</span> like this</div>
            </div>
          </div>
          <div class="book-card">
            <div class="content-wrapper">
              <img src="https://images-na.ssl-images-amazon.com/images/I/71PL7BiZ5NL.jpg" alt="" class="book-card-img">
              <div class="card-content">
                <div class="book-name">Stay And Fight</div>
                <div class="book-by">by Lucy Parker</div>
                <div class="rate">
                  <fieldset class="rating book-rate">
                    <input type="checkbox" id="star-c1" name="rating" value="5">
                    <label class="full" for="star-c1"></label>
                    <input type="checkbox" id="star-c2" name="rating" value="4">
                    <label class="full" for="star-c2"></label>
                    <input type="checkbox" id="star-c3" name="rating" value="3">
                    <label class="full" for="star-c3"></label>
                    <input type="checkbox" id="star-c4" name="rating" value="2">
                    <label class="full" for="star-c4"></label>
                    <input type="checkbox" id="star-c5" name="rating" value="1">
                    <label class="full" for="star-c5"></label>
                  </fieldset>
                  <span class="book-voters card-vote">1.987 voters</span>
                </div>
                <div class="book-sum card-sum">Readers of all ages and walks of life have drawn inspiration and empowerment from Elizabeth Gilbert’s books for years. </div>
              </div>
            </div>
            <div class="likes">
              <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
              <div class="like-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
              </div>
              <div class="like-name"><span>Samantha William</span> and<span> Jonathan</span> like this</div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>
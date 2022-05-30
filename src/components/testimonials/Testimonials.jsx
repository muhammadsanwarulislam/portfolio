import React from 'react'
import './testimonials.css'
import AVTR1 from '../../assets/avatar1.jpg'
import AVTR2 from '../../assets/avatar2.jpg'
import AVTR3 from '../../assets/avatar3.jpg'

// import Swiper core and required modules
import { Pagination } from 'swiper';

import { Swiper, SwiperSlide } from 'swiper/react';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';


const data = [
  {
    avatar: AVTR1,
    name: 'Muhammad',
    review: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi obcaecati quaerat distinctio voluptates, rerum eligendi nostrum id blanditiis debitis libero velit saepe veritatis quae repellat! Molestias adipisci dignissimos a vel!"

  },
  {
    avatar: AVTR2,
    name: 'Muhammad',
    review: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi obcaecati quaerat distinctio voluptates, rerum eligendi nostrum id blanditiis debitis libero velit saepe veritatis quae repellat! Molestias adipisci dignissimos a vel!"

  },
  {
    avatar: AVTR3,
    name: 'Muhammad',
    review: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi obcaecati quaerat distinctio voluptates, rerum eligendi nostrum id blanditiis debitis libero velit saepe veritatis quae repellat! Molestias adipisci dignissimos a vel!"

  },
  {
    avatar: AVTR1,
    name: 'Muhammad',
    review: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi obcaecati quaerat distinctio voluptates, rerum eligendi nostrum id blanditiis debitis libero velit saepe veritatis quae repellat! Molestias adipisci dignissimos a vel!"

  }
]
const Testimonials = () => {
  return (
    <section id='testimonials'>
      <h5>Review from client</h5>
      <h2>Testimonials</h2>

      <Swiper className="container testimonials__container"
      // install Swiper modules
      modules={[Pagination]}
      spaceBetween={40}
      slidesPerView={1}
      navigation
      pagination={{ clickable: true }}>
        {
          data.map(({avatar, name, review}, index) => {
            return(
              <SwiperSlide key={index} className="testimonial">
                <div className="client__avatar">
                  <img src={avatar} alt="Client review one" />
                </div>
                <h5 className="client__name">{name}</h5>
                  <small className="client__review">{review}</small>
              </SwiperSlide>
            )
          })
        }
      </Swiper>
    </section>
  )
}

export default Testimonials
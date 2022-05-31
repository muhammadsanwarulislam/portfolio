import React from 'react'
import './contact.css'
import {MdOutgoingMail} from 'react-icons/md'
import {RiMessengerLine} from 'react-icons/ri'
import {BsWhatsapp} from 'react-icons/bs'

const Contact = () => {
  return (
    <section id='contact'>
      <h5>Get In Touch</h5>
      <h2>Contact Me</h2>

      <div className="container contact__container">
        <div className="contact__options">
          <article className="contact__option">
            <MdOutgoingMail className="contact__option-icon"/>
            <h4>Email</h4>
            <h5>muhammad.sanwarul94@gmail.com</h5>
            <a href="mailto:muhammad.sanwarul94@gmail.com" target="_blank">Send a message</a>
          </article>
          <article className="contact__option">
            <RiMessengerLine className="contact__option-icon"/>
            <h4>Messenger</h4>
            <h5>Muhammad Sanwarul</h5>
            <a href="https://m.me/muhammadsanwarulislam" target="_blank">Send a message</a>
          </article>
          <article className="contact__option">
            <BsWhatsapp className="contact__option-icon"/>
            <h4>WhatsApp</h4>
            <h5>+8801684279998</h5>
            <a href="https://api.whatsapp.com/send?phone+01684279998" target="_blank">Send a message</a>
          </article>
        </div>
        {/* End of contact options */}
        <form action="">
          <input type="text" name="name" placeholder="Your Full Name" required />
          <input type="email" name="email" placeholder="Your Email" required />
          <textarea type="message" name="name" placeholder="Your Full Name" required></textarea>
          <button type="submit" className="btn btn-primary">Send Message</button>
        </form>
      </div>
    </section>
  )
}

export default Contact
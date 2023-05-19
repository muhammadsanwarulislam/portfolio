import { LazyLoadImage } from 'react-lazy-load-image-component'
import content from '../content'
import { FaDatabase } from "react-icons/fa";

const About = () => {
    return (
        <div className='min-h-screen flex flex-col-reverse md:flex-row justify-evenly items-center font-dosis bg-soft' id='about'>
            <div className='w-11/12 md:w-2/5 flex flex-wrap justify-center mt-10 md:mt-0'>
            <span key="" 
                    className='animate-refloat w-40 h-40 m-4 p-4 bg-soft shadow-2xl hover:shadow flex justify-center items-center rounded-full cursor-pointer anim'>
                        <LazyLoadImage src='assets/img1.jpg' alt="" effect='blur' />
                    </span>
                <table className='table-fixed border-4 border-indigo-200 border-x-indigo-500'>
                    <tbody>
                        <tr>
                            <td className='text-l font-bold text-right'>Language</td>
                            <td>
                                <ul className='marker:text-sky-400 list-disc border border-indigo-600 pl-5 space-y-3 text-slate-500'>
                                    <li className='flex py-1 text-sm font-bold text-right'>PHP</li>
                                    <li className='flex py-1 text-sm font-bold text-right'>C++</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td className='text-l font-bold text-right'>Framework/Library</td>
                            <td>
                                <ul className='marker:text-sky-400 list-disc border border-indigo-600 pl-5 space-y-3 text-slate-500'>
                                    <li className='flex py-1 text-sm font-bold text-right'>LARAVEL</li>
                                    <li className='flex py-1 text-sm font-bold text-right'>OCTOBERCMS</li>
                                    <li className='flex py-1 text-sm font-bold text-right'>REACT JS</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td className='text-l font-bold text-right'>Database</td>
                            <td>
                                <ul className='marker:text-sky-400 list-disc border border-indigo-600 pl-5 space-y-3 text-slate-500'>
                                    <li className='flex py-1 text-sm font-bold text-right'>MYSQL</li>
                                    <li className='flex py-1 text-sm font-bold text-right'>SQL</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td className='text-l font-bold text-right'>Design Patterns</td>
                            <td>
                                <ul className='marker:text-sky-400 list-disc border border-indigo-600 pl-5 space-y-3 text-slate-500'>
                                    <li className='flex py-1 text-sm font-bold text-right'>Repository Design Patterns</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td className='text-l font-bold text-right'>Code Management Tools</td>
                            <td>
                                <ul className='marker:text-sky-400 list-disc border border-indigo-600 pl-5 space-y-3 text-slate-500'>
                                    <li className='flex py-1 text-sm font-bold text-right'>Git</li>
                                    <li className='flex py-1 text-sm font-bold text-right'>ClickUP</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div className='w-5/6 md:w-2/5 mt-10'>
                <h1 className='text-4xl font-bold text-left'>About Me</h1>
                <h2 className=' mt-3 text-3xl font-bold text-left'>Sanwarul Islam</h2>
                <p className='mt-5 w-11/12 md:max-w-xl text-lg md:text-xl text-justify'>{content.stack.desc}.</p>
                <div className='flex flex-row items-center font-bold m-3' style={{ color: '#091c29' }}>
                    <span><FaDatabase size={22} /></span>
                    <p className='ml-3 text-xl text-left'>Backend</p>
                </div>
            </div>
        </div>
    )
}

export default About
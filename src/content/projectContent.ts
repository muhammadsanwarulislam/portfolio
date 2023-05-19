import content from "."
const imgPath = `/assets/project`

const projectContent = [
    {
        title: 'Orange Business Development Ltd.(orangebd)',
        desc: 'Last two years i have been working with Bangladesh National Portal(CMS) project and different kind of services of this project.',
        projects: [
            {
                img_thumb: imgPath + '/1.png',
                title: 'Bangladesh National',
                short_desc: "Bangladesh National Portal is a national portal of the People's Republic of Bangladesh under Access to Information programme ran from the Prime Minister's Office of Bangladesh.",
                long_desc: '',
                tools_tech: ['PHP', 'LARAVEL', 'TWIG', 'MYSQL', 'JAVASCRIPT', 'LUMEN','PHALCON'],
                private: true
            },
            {
                img_thumb: imgPath + '/2.png',
                title: 'Bangladesh Polling System',
                short_desc: 'Bangladesh polling system take user feedback from Bangladesh national portal user, as well as people can participate the polling.People can also comments and suggestions particular portal to get the soluations.',
                long_desc: '',
                tools_tech: ['NUXTJS', 'LARAVEL', 'MYSQL','HTML','CSS'],
                private: true
            },
            {
                img_thumb: imgPath + '/3.png',
                title: 'Database Migration Script',
                short_desc: 'The following project helped to migrate the old database structure to the new database structure.',
                long_desc: '',
                tools_tech: ['PHP', 'LARAVEL', 'MYSQL'],
                private: true
            }
        ]
    },
    {
        title: 'Desktopit',
        desc: 'I joined as an intern, and after that, they confirm me as an asst. programmer. Most of the time I have to work in laravel to build an alumni association project.',
        projects: [
            {
                img_thumb: imgPath + '/4.png',
                title: 'Bangladesh Livestock Society',
                short_desc: "Livestock and poultry is an integral component of agricultural economy of Bangladesh performing multifarious functions such as provision of food, nutrition, income, savings, draft power, manure, transport, social and cultural functions. About 75% of the population relies to some degree on livestock for their livelihood specially the landless farmers. Infants, adolescents and elderly people live on milk to a greater extent majority of which is imported from abroad a the cost of hard earned foreign currency.",
                long_desc: '',
                tools_tech: ['PHP', 'LARAVEL', 'HTML', 'MYSQL', 'JAVASCRIPT', 'CSS'],
                private: true
            }
        ]
    },
    {
        title: 'Self-development',
        desc: 'I was trying to remember my academic life.',
        projects: [
            {
                img_thumb: imgPath + '/5.png',
                title: 'PHP-Data-Structures',
                short_desc: "This repository will help you to learn basic data structures and algorithms using PHP.",
                long_desc: '',
                tools_tech: ['PHP'],
                private: true
            }
        ]
    },
]

export default projectContent
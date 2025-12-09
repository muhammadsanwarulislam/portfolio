import config from '~/content/config.json'
import profile from '~/content/profile.json'
import experience from '~/content/experience.json'
import projects from '~/content/projects.json'
import skills from '~/content/skills.json'
import social from '~/content/social.json'

export const useContent = () => {
  // Get all content
  const getAllContent = () => ({
    config,
    profile,
    experience,
    projects,
    skills,
    social
  })

  // Get site config
  const getSiteConfig = () => config

  // Get profile data
  const getProfile = () => profile

  // Get experiences
  const getExperiences = () => experience.timeline

  // Get projects with optional filtering
  const getProjects = (category = 'all') => {
    if (category === 'all') {
      return projects.projects
    }
    return projects.projects.filter(project => 
      project.category.includes(category)
    )
  }

  // Get project categories
  const getProjectCategories = () => projects.categories

  // Get skills by category
  const getSkills = () => skills

  // Get social links
  const getSocialLinks = () => social.links

  // Get CTA links
  const getCTALinks = () => social.cta

  return {
    getAllContent,
    getSiteConfig,
    getProfile,
    getExperiences,
    getProjects,
    getProjectCategories,
    getSkills,
    getSocialLinks,
    getCTALinks
  }
}
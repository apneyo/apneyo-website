# Code for Apneyomancora.org

This readme will guide you through the steps to clone the code for the Apneyomancora.org website from GitHub and give push permissions to another developer, as well as manage hosting using the Vercel account linked to the GitHub account "apneyo".

## Cloning the Repository

To clone the repository, follow these steps:

1. Open the terminal or command line.

2. Change to the directory where you want to store the repository.

3. Run the following command to clone the repository:

```
git clone https://github.com/apneyo/website.git
```


4. Log in to GitHub with the username "apneyo" and password (ask apneyo staff) if prompted.

The repository should now be cloned to your local machine.

## Giving Push Permissions to Another Developer

To give another developer push permissions to the repository, follow these steps:

1. Open the repository "apneyo/website" on GitHub.

2. Click on the "Settings" tab.

3. Under the "Collaborators" section, enter the GitHub username of the developer you want to give push permissions to.

4. Click on the "Add Collaborator" button.

The other developer should now be able to make changes to the code and push them to the repository.

## Managing Hosting Using Vercel

The Apneyomancora.org website is hosted using Vercel and the account linked to the GitHub account "apneyo". To manage the hosting, follow these steps:

1. Log in to Vercel using github account "apneyo".

2. Go to the "Projects" tab.

3. Find the project "Apneyomancora.org" and click on it to open it.

You should now be able to manage the hosting for the website, including deploying changes.

## Automatic Deployments

Automatic deployments by committing to the "main" branch are already enabled, so any changes pushed to the "main" branch will be automatically deployed to the website.

## Downsides of the Development

Although this development is simple and easy to manage, there are some downsides:

- Limited functionality: Without a CMS, it can be difficult to add dynamic content to the site, such as blog posts or user-generated content.

- No separation of concerns: The code for the presentation, logic, and data is all mixed together, making it harder to maintain and update the site.

- Poor performance: Without a bundler, the site may load slowly and be less optimized for performance.

## Proposed Enhancements

To address these downsides, the following enhancements can be made:

1. Add a CMS: By adding a CMS, such as WordPress or Ghost, it will be easier to manage dynamic content and add new features to the site.

2. Use a bundler: By using a bundler, such as Webpack or Rollup, the site can be optimized for performance and made easier to maintain.

3. Add HTML templating: By using a templating language, such as Handlebars or Nunjucks, the

<img src="https://github.com/Benrobo/kwickquick-client-organization/blob/main/scanner.png?raw=true">

## Inspiration

Who enjoys being stuck in a queue, waiting for longer time just to buy something? I guest no one. Let's be honest, Queues are bad, annoying for customers and a great loss for businesses. How, you may ask??.To elaborate, imaging you going to get just a can of milk for $5 and you end up in a long queue waiting up to 45 min to to pay for the item. As a customer, that is a frustrating, unsatisfactory, and a big waist of time. Typically, you won't like buy from that mall whenever you notice a queue there. The business loses you. Fortunately, there's an actionable tool to dissmiss this problem. Devcamp a small group of young developers plans to deploy kwickquick, an enterprise Fintech application focused primarily on MVP pattern.

## What it does

Let's take a closer look at how this works.
The application is made up of two different apps, one for organizations (businesses) and the other one for consumers (users). Organizations have to sign-up to make use of our services, and then they can now add their products and generate a unique QR code for each products which would contain the products info and also prints this QR code and then attached it to their physical product.

The second app is essentially a scanner with which customers can scan the above-mentioned QR code. After the QR code scan,
customers can see all the product details, including information like nutrition, components or ingredients and care instructions, a dialog box for quantity, size, colour, etc... and then automatically adds them to cart for you to pay, still within the app with your card info. Basically, kwickquick introduces a customer to self-serving himself in the mall while limiting the need for man to man contact. With just a few clicks, from whereever your desired product is stacked in the mall, you can scan the QR code of the product and pay your bills at the spot.

## How we built it

The whole application is built using Javascript HTML CSS for the frontend and Nodejs/Express.js for the backend api and postgresql for database.

## Challenges we ran into

Developing all complex functionalities in a short period of time and connecting the two applications was one of the challenges we faced.

## Accomplishments that we're proud of

Al though it not yet a full fledge app yet, but we were proud to bring this two systems into reality and also solving real world case problems

## What we learned

We learnt about how users flow through the app.

## What's next for KwickQuick

As the team lead software developer weve decided in taking kwickquick to the next place and also funding it

## ❤❤ Contributing

before making any pull request, make sure you follow the steps below

#### ✅ clone the repo to your PC

This is the simplest part of Git. Navigate to your forked repository (the repository is now one of your GitHub repositories). Follow steps 1 and 2 as shown in the image below to copy the clone address.

Then, clone the project by typing git clone <the copied address> into your command terminal as shown below:

```javascript
    git clone https://github.com/Benrobo/kickquick-client.git
```

#### 💎 Create the branch you want to work on.

The upstream is necessary to keep track of the difference between the forked repository that is on your Git account and the original repository.
It is nice to create a new branch whenever you want to contribute. This illustrates that the branch is only for that contribution you are about to make. It could be as small as fixing a typo or as large as implementing a new feature. Either way, it’s good practice to create a branch.

Another important part of the branch creation is naming. It is pleasing to use a name that a stranger who knows nothing about the repository can easily understand. If you want to add a login feature, for example, you could create a branch called add-login-feature or login-feature.

To create a branch type the following command into your terminal:

```javascript
    git checkout -b login-feature
    // Note do not use main has your branch name, cause that where the original and production code resides in
```

#### 💕 Git add and commit your contributions

This is quite simple as well. Stage and commit your changes by typing the following into your terminal.

```javascript
    git add .

    git commit -m 'Commit message'
```

Now, you have the changes staged and committed. What next?

#### 🎗💖 Push to the branch you’re working on

Now, you are almost there. Push your changes to the branch you are working on as shown below:

```javascript
    git push origin <branch-name>
    // eg git push origin login-feature
```

#### 🎉 Open a pull request

To open a pull request, navigate to the forked repository as shown below. You’ll see your last push branch ‘login-feature’, then click on ‘compare and pull request’.

And that’s it. :) You can now go ahead and contribute like a PRO!

@api @post @javascript @stability @perfect @critical @DS-250 @DS-251 @DS-675 @database @stability-2 @post-comments
Feature: Comment on a Post
  Benefit: In order to give my opinion on a post
  Role: As a Verified
  Goal/desire: I want to comment on a post

  Scenario: Successfully create, edit and delete a comment on a post
  Given users:
      | name      | status | pass      | roles    |
      | PostUser1 |      1 | PostUser1 | verified |
      | PostUser2 |      1 | PostUser2 | verified |
    And I am logged in as "PostUser1"
    And I am on the homepage

        # Scenario: Succesfully create a private post
   When I fill in "Say something to the Community" with "This is a community post."
    And I select post visibility "Community"
    And I press "Post"
   Then I should see the success message "Your post has been posted."
    And I should see "This is a community post." in the "Main content front"
    And I should see "PostUser1" in the "Main content front"

        # Scenario: Post a comment on this private post
  Given I am logged in as "PostUser2"
    And I am on the homepage
   When I fill in "Comment #1" for "Post comment"
    And I press "Comment"
   Then I should see the success message "Your comment has been posted."

        # Scenario: edit comment
  When I click the xth "0" element with the css ".comment .comment__actions .dropdown-toggle" in the "Main content"
    And I click "Edit"
    And I fill in "Comment #1 to be deleted" for "Post comment"
    And I press "Submit"
   Then I should see the success message "Your comment has been posted."

        # Scenario: delete comment
   When I am on the homepage
    And I click the xth "0" element with the css ".comment .comment__actions .dropdown-toggle" in the "Main content"
    And I click "Delete"
   Then I should see "This action cannot be undone."
        # Confirm delete
   When I press "Delete"
    And I wait for the batch job to finish
   Then I should see "The comment and all its replies have been deleted."

  Given I am on the homepage
   When I fill in "Comment #2" for "Post comment"
    And I press "Comment"
   Then I should see the success message "Your comment has been posted."
   When I fill in "Comment #3" for "Post comment"
    And I press "Comment"
   Then I should see the success message "Your comment has been posted."
    And I should see "Comment #3"
        #in the ".card--stream" element
    And I should see "Comment #2"
        #in the ".card--stream" element
  #@TODO And I should not see "Comment #1" in the ".card--stream" element
